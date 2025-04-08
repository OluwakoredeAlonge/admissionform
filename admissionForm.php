<?php
session_start();
require_once "classes/Payment.php";
if (!isset($_SESSION['payment_refno'])) {
  $_SESSION["errormsg"] = "Please ensure you complete the form purchase through the appropriate channels.";
  header("location: index.php");
  exit();
  // Check if the user has already submitted the form or if the payment reference number is set
  // if (isset($_SESSION['form_submitted']) || isset($_SESSION['payment_refno'])) {
  //   // Redirect if the user tries to access the form again
  //   $_SESSION["errormsg"] = "You cannot access the form again.";
  //   header("Location: download_admissionform.php");
  //   exit();
  // }
}
$reference = $_SESSION['payment_refno'];
$payment = new Payment();
$data = $payment->get_pay_ref($reference);
if (!$data) {
  $_SESSION["errormsg"] = "Please ensure you complete the form purchase through the appropriate channels.";
  header("location: index.php");
  exit();
}
if (isset($_SESSION['errormsg'])) {
  echo "<script>
document.addEventListener('DOMContentLoaded', function() {
Swal.fire({
icon: 'error',
title: 'Error',
text: '" . addslashes($_SESSION['errormsg']) . "',
});
});
</script>";
  unset($_SESSION['errormsg']);
}
if (isset($_SESSION['feedback'])) {
  echo "<script>
document.addEventListener('DOMContentLoaded', function() {
Swal.fire({
icon: 'success',
title: 'Success',
text: '" . addslashes($_SESSION['feedback']) . "',
});
});
</script>";
  unset($_SESSION['feedback']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission Form</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/fa/css/all.css">
  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row align-items-center text-center text-md-start py-3">
      <!-- Logo Section -->
      <div class="col-12 col-md-3 d-flex justify-content-center justify-content-md-start mb-2 mb-md-0">
        <img src="images/logo.jpg" alt="School Logo" class="img-fluid" style="max-width: 100px;">
      </div>
      <!-- School Name & Admission Form Title -->
      <div class="col-12 col-md-9">
        <h3 class="fw-bold text-uppercase mb-1 text-center">Mathews' & Margarets' International Schools</h3>
        <p class="fw-semibold mb-2 text-center">Olujoda Street, Ado-Ekiti</p>
        <h2 class="fw-bold text-primary text-uppercase text-center">Admission Form</h2>
      </div>
    </div>
    <form action="process/form_action.php" method="post">
      <div class="row">
        <div class="col-12">
          <div class="card shadow-sm mb-4">
            <div class="card-header">
              <h5 class="mb-0">Candidate Information</h5>
            </div>
            <div class="card-body">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="candidateName" placeholder="Name of the Student/Pupil" name="student_name"
                  value="<?= $_SESSION['form_data']['student_name'] ?? '' ?>">
                <label for="candidateName">Student/Pupil Name</label>
              </div>
              <!-- Gender Section -->
              <div class="col-12 col-md-6 mb-3">
                <label class="form-label">Gender</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                    <?= (($_SESSION['form_data']['gender'] ?? '') == 'male') ? 'checked' : '' ?>>
                  <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                    <?= (($_SESSION['form_data']['gender'] ?? '') == 'female') ? 'checked' : '' ?>>
                  <label class="form-check-label" for="female">Female</label>
                </div>
              </div>
              <!-- Date of Birth and Place of Birth -->
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Candidate Date of Birth"
                      value="<?= $_SESSION['form_data']['dob'] ?? '' ?>">
                    <label for="dob">Date of Birth</label>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth" placeholder="Place of Birth"
                      value="<?= $_SESSION['form_data']['placeOfBirth'] ?? '' ?>">
                    <label for="placeOfBirth">Place of Birth</label>
                  </div>
                </div>
              </div>
              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="nin" placeholder="Candidate NIN" name="nin"
                  value="<?= $_SESSION['form_data']['nin'] ?? '' ?>">
                <label for="nin">NIN</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="hometown" placeholder="Candidate Hometown" name="candidate_hometown"
                  value="<?= $_SESSION['form_data']['candidate_hometown'] ?? '' ?>">
                <label for="hometown">Candidate Hometown</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="lga" placeholder="LGA" name="candidate_lga"
                  value="<?= $_SESSION['form_data']['candidate_lga'] ?? '' ?>">
                <label for="lga">Candidate Local Government Area</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="stateOfOrigin" placeholder="State" name="candidate_stateofOrigin"
                  value="<?= $_SESSION['form_data']['candidate_stateofOrigin'] ?? '' ?>">
                <label for="stateOfOrigin">Candidate State of Origin</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Father's Info -->
      <div class="row">
        <div class="col">
          <div class="card mb-3">
            <div class="card-header">Father's Information</div>
            <div class="card-body">
              <?php
              $fields = [
                'candidate_nameoffather' => 'Name of Father',
                'candidate_fatheraddress' => 'Residential Address',
                'candidate_father_occupation' => 'Occupation',
                'candidate_fatherphone' => 'Phone Number'
              ];
              foreach ($fields as $field => $label): ?>
                <div class="form-floating mb-3">
                  <input type="<?= strpos($field, 'phone') !== false ? 'number' : 'text' ?>" class="form-control" id="<?= $field ?>" name="<?= $field ?>" placeholder="<?= $label ?>"
                    value="<?= $_SESSION['form_data'][$field] ?? '' ?>">
                  <label for="<?= $field ?>"><?= $label ?></label>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <!-- Mother's Info -->
          <div class="card mb-3">
            <div class="card-header">Mother's Information</div>
            <div class="card-body">
              <?php
              $fields = [
                'candidate_nameofmother' => 'Name of Mother',
                'candidate_motheraddress' => 'Residential Address',
                'candidate_mother_occupation' => 'Occupation',
                'candidate_motherphone' => 'Phone Number'
              ];
              foreach ($fields as $field => $label): ?>
                <div class="form-floating mb-3">
                  <input type="<?= strpos($field, 'phone') !== false ? 'number' : 'text' ?>" class="form-control" id="<?= $field ?>" name="<?= $field ?>" placeholder="<?= $label ?>"
                    value="<?= $_SESSION['form_data'][$field] ?? '' ?>">
                  <label for="<?= $field ?>"><?= $label ?></label>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <!-- Guardian Info -->
          <div class="card mb-3">
            <div class="card-header">Guardian's Information</div>
            <div class="card-body">
              <?php
              $fields = [
                'candidate_guardianname' => 'Name of Guardian',
                'candidate_guardianaddress' => 'Residential Address',
                'candidate_guardianoccupation' => 'Occupation',
                'candidate_guardianphone' => 'Phone Number'
              ];
              foreach ($fields as $field => $label): ?>
                <div class="form-floating mb-3">
                  <input type="<?= strpos($field, 'phone') !== false ? 'number' : 'text' ?>" class="form-control" id="<?= $field ?>" name="<?= $field ?>" placeholder="<?= $label ?>"
                    value="<?= $_SESSION['form_data'][$field] ?? '' ?>">
                  <label for="<?= $field ?>"><?= $label ?></label>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Previous Schools -->
      <div class="row">
        <div class="col-12">
          <h3 class="mb-3">Previous Schools Attended with Dates</h3>
          <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="previousSchool<?= $i ?>" placeholder="Previous School <?= $i ?>"
                name="candidate_school<?= ['one', 'two', 'three'][$i - 1] ?>"
                value="<?= $_SESSION['form_data']['candidate_school' . ['one', 'two', 'three'][$i - 1]] ?? '' ?>">
              <label for="previousSchool<?= $i ?>">Name of Previous School</label>
            </div>
          <?php endfor; ?>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="admissionClass" placeholder="Enter Class" name="candidate_class"
              value="<?= $_SESSION['form_data']['candidate_class'] ?? '' ?>">
            <label for="admissionClass">Class to which you are seeking admission</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="formmail" placeholder="Mail to send admission form" name="formmail"
              value="<?= $_SESSION['form_data']['formmail'] ?? '' ?>">
            <label for="formmail">Mail to send admission form</label>
          </div>
          <div class="text-end">
            <button class="btn btn-success px-4" name="submit_btn">
              <i class="fas fa-download me-2"></i> Download Admission Form
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
<script src="assets/js/sweetalert.js"></script>
<script src="assets/jquery.js"></script>
<script>
  $(document).ready(function() {
    $('#admissionClass').on('change', function() {
      const message = "Kindly review the entire form before proceeding. Once you click the download button, you will not be able to return to this page.";
      if (!confirm(message)) {
        // Optionally reset the selection if user is not ready
        $(this).val('');
      }
    });
  });
</script>
<script>
  // Set max date to today for DOB field
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('dob').setAttribute('max', today);
</script>
</html>