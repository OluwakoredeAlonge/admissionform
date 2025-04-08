<?php
require 'vendor/autoload.php'; // if you installed with composer
use Dompdf\Dompdf;
use Dompdf\Options;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();
require_once "classes/Admission.php";
$admit = new Admission;
$id = $_GET['form_id'];
$form = $admit->get_detailsbyId($id);
// Set up DOMPDF
$options = new Options();
$options->set('isRemoteEnabled', true); // allows external images
$dompdf = new Dompdf($options);
// Start capturing HTML
ob_start();
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
    body {
      font-family: 'Times New Roman', Times, serif;
      font-size: 12px;
      position: relative;
      z-index: 0;
    }
    body::before {
      content: "";
      position: absolute;
      top: 100px;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: url('http://localhost/school/images/logo.png');
      background-repeat: no-repeat;
      background-position: center;
      background-size: 500px 450px;
      opacity: 0.1;
      z-index: -1;
    }
    .text-centers {
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
      text-transform: uppercase;
    }
    .holder {
      float: left;
      border: 1px solid #000;
      width: 140px;
      height: 140px;
      margin-right: 10px;
      padding: 5px;
      text-align: center;
    }
    @page {
      margin: 20px;
    }
    body {
      font-size: 11px;
      margin: 0;
      padding: 0;
      line-height: 1.2;
      page-break-inside: avoid;
    }
    .container-fluid {
      page-break-inside: avoid;
    }
    p {
      margin: 10px 0;
      page-break-inside: avoid;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="col-3">
          <img src="http://localhost/school/images/logo.png" alt="School Logo" class="img-fluid" style="max-width: 80px;">
        </div>
        <div class="col-9" style="margin-top: -100px; margin-left:100px;">
          <h3 class="text-centers" style="font-size: 20px;">Mathews' & Margarets' International Schools</h3>
          <p class="text-centers">Olujoda Street, Ado-Ekiti</p>
          <h2 class="text-centers" style="font-size: 30px;">Admission Form</h2>
        </div>
      </div>
    </div>
    <div style="text-align: center; margin: 30px 120px;">
      <div class="holder">
        <p style="margin: 0; padding-top: 80px;">Candidate's Passport</p>
      </div>
      <div class="holder">
        <p style="margin: 0; padding-top: 80px;">Mother's Passport</p>
      </div>
      <div class="holder">
        <p style="margin: 0; padding-top: 80px;">Father's Passport</p>
      </div>
      <div style="clear: both;"></div>
    </div>
    <p><strong>Name:</strong> <?= strtoupper($form['student_name']) ?></p>
    <p><strong>Gender:</strong> <?= strtoupper($form['student_gender']) ?></p>
    <p><strong>Date of Birth:</strong> <?= date('l, F j, Y', strtotime($form['student_dob'])) ?></p>
    <p><strong>Place of Birth:</strong> <?= strtoupper($form['student_placeof_birth']) ?></p>
    <p><strong>NIN:</strong> <?= strtoupper($form['student_nin']) ?></p>
    <p><strong>Hometown:</strong> <?= strtoupper($form['student_hometown']) ?></p>
    <p><strong>LGA:</strong> <?= strtoupper($form['student_lga']) ?></p>
    <p><strong>State of Origin:</strong> <?= strtoupper($form['student_stateofOrigin']) ?></p>
    <p><strong>Father's Name:</strong> <?= strtoupper($form['student_fathersName']) ?></p>
    <p><strong>Father's Address:</strong> <?= strtoupper($form['fathers_residentialAddress']) ?></p>
    <p><strong>Father's Occupation:</strong> <?= strtoupper($form['fathers_occupation']) ?></p>
    <p><strong>Father's Phone:</strong> <?= strtoupper($form['fathers_phone']) ?></p>
    <p><strong>Mother's Name:</strong> <?= strtoupper($form['student_mothersName']) ?></p>
    <p><strong>Mother's Address:</strong> <?= strtoupper($form['mothers_residentialAddress']) ?></p>
    <p><strong>Mother's Occupation:</strong> <?= strtoupper($form['mothers_occupation']) ?></p>
    <p><strong>Mother's Phone:</strong> <?= $form['mothers_phone'] ?></p>
    <p><strong>Guardian's Name:</strong> <?= strtoupper($form['student_guardianName']) ?></p>
    <p><strong>Guardian's Address:</strong> <?= strtoupper($form['guardians_residentialAddress']) ?></p>
    <p><strong>Guardian's Occupation:</strong> <?= strtoupper($form['guardians_occupation']) ?></p>
    <p><strong>Guardian's Phone:</strong> <?= $form['guardians_phone'] ?></p>
    <p><strong>Previous School 1:</strong> <?= strtoupper($form['previousSchool_One']) ?></p>
    <p><strong>Previous School 2:</strong> <?= strtoupper($form['previousSchool_Two']) ?></p>
    <p><strong>Previous School 3:</strong> <?= strtoupper($form['previousSchool_Three']) ?></p>
    <p><strong>Class Applied For:</strong> <?= strtoupper($form['admission_class']) ?></p>
    <br>
    <p><b>Parents/Guardian Signature & Date</b>
    <br>
    <br>........................................................................................................</p>
    <p><strong>Note:</strong> Please attach photocopies of National Population Birth & NIN Certificates.</p>
    <p>Form should be submitted within two weeks.</p>
  </div>
</body>
<script src="assets/js/sweetalert.js"></script>
</html>
<?php
$html = ob_get_clean();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
// Define the path to save the PDF temporarily
$pdfDir = __DIR__ . '/admissionform';  // Absolute path to the 'admissionform' directory
$candidateName = strtoupper(str_replace(' ', '_', $form['student_name']));
$pdfFileName = $candidateName . '_Admission_Form.pdf';
$pdfPath = $pdfDir . '/' . $pdfFileName;
if (!file_exists($pdfDir)) {
  mkdir($pdfDir, 0777, true);  // Create the directory if it doesn't exist
}
// Save the PDF to the server
file_put_contents($pdfPath, $dompdf->output());
// Send the email silently
$mail = new PHPMailer(true);
try {
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'mickyalonge@gmail.com';
  $mail->Password = 'nexp cnsx gije hlgr';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;
  $mail->setFrom('koredealonge38@gmail.com', "Mathews' & Margarets' International Schools");
  $mail->addAddress($form['form_mail']);
  $mail->isHTML(true); // Set email format to HTML
  $mail->Subject = 'Admission Form';
  $mail->Body = "Dear $candidateName, <br><br> Kindly find the attached PDF document containing your admission form for review. <br><br> Please ensure that you submit the completed form within 2 weeks of purchase, as late submissions may not be considered. <br><br> Should you encounter any issues or require further assistance, please do not hesitate to contact the admissions office at 08035288677. <br><br> Best regards, <br> Mathews & Margarets International Schools Admissions Team";
  $mail->addAttachment($pdfPath);
  $mail->send(); // Send silently, no echo
} catch (Exception $e) {
  // Optional: log error silently or ignore
}
// Display the PDF in the browser
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="' . $pdfFileName . '"');
header('Content-Length: ' . filesize($pdfPath));
readfile($pdfPath);
// Clean up after sending
unlink($pdfPath);
exit;
?>