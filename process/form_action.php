<?php
session_start();
require_once "../classes/Admission.php";

// Check if form is submitted
if (isset($_POST['submit_btn'])) {
    // Sanitize and store form data
    $student_name = htmlentities($_POST['student_name']);
    $student_gender = htmlentities($_POST['gender']);
    $student_dob = htmlentities($_POST['dob']);
    $student_placeofbirth = htmlentities($_POST['placeOfBirth']);
    $student_nin = htmlentities($_POST['nin']);
    $student_hometown = htmlentities($_POST['candidate_hometown']);
    $student_lga = htmlentities($_POST['candidate_lga']);
    $student_stateoforigin = htmlentities($_POST['candidate_stateofOrigin']);
    $father_name = htmlentities($_POST['candidate_nameoffather']);
    $father_address = htmlentities($_POST['candidate_fatheraddress']);
    $father_occupation = htmlentities($_POST['candidate_father_occupation']);
    $father_phonenumber = htmlentities($_POST['candidate_fatherphone']);
    $mother_name = htmlentities($_POST['candidate_nameofmother']);
    $mother_address = htmlentities($_POST['candidate_motheraddress']);
    $mother_occupation = htmlentities($_POST['candidate_mother_occupation']);
    $mother_phonenumber = htmlentities($_POST['candidate_motherphone']);
    $guardian_name = htmlentities($_POST['candidate_guardianname']);
    $guardian_address = htmlentities($_POST['candidate_guardianaddress']);
    $guardian_occupation = htmlentities($_POST['candidate_guardianoccupation']);
    $guardian_phonenumber = htmlentities($_POST['candidate_guardianphone']);
    $candidate_schoolone = htmlentities($_POST['candidate_schoolone']);
    $candidate_schooltwo = htmlentities($_POST['candidate_schooltwo']);
    $candidate_schoolthree = htmlentities($_POST['candidate_schoolthree']);
    $admission_class = htmlentities($_POST['candidate_class']);
    $send_mail = htmlentities($_POST['formmail']);

    $_SESSION['form_data'] = [
        'student_name' => $student_name,
        'gender' => $student_gender,
        'dob' => $student_dob,
        'placeOfBirth' => $student_placeofbirth,
        'nin' => $student_nin,
        'candidate_hometown' => $student_hometown,
        'candidate_lga' => $student_lga,
        'candidate_stateofOrigin' => $student_stateoforigin,
        'candidate_nameoffather' => $father_name,
        'candidate_fatheraddress' => $father_address,
        'candidate_father_occupation' => $father_occupation,
        'candidate_fatherphone' => $father_phonenumber,
        'candidate_nameofmother' => $mother_name,
        'candidate_motheraddress' => $mother_address,
        'candidate_mother_occupation' => $mother_occupation,
        'candidate_motherphone' => $mother_phonenumber,
        'candidate_guardianname' => $guardian_name,
        'candidate_guardianaddress' => $guardian_address,
        'candidate_guardianoccupation' => $guardian_occupation,
        'candidate_guardianphone' => $guardian_phonenumber,
        'candidate_schoolone' => $candidate_schoolone,
        'candidate_schooltwo' => $candidate_schooltwo,
        'candidate_schoolthree' => $candidate_schoolthree,
        'candidate_class' => $admission_class,
        'formmail' => $send_mail,
    ];

    // Validate if any required field is empty
    $required_fields = [
        $student_name, $student_gender, $student_dob, $student_placeofbirth,
        $student_nin, $student_hometown, $student_lga, $student_stateoforigin,
        $father_name, $father_address, $father_occupation, $father_phonenumber,
        $mother_name, $mother_address, $mother_occupation, $mother_phonenumber,
        $guardian_name, $guardian_address, $guardian_occupation, $guardian_phonenumber,
        $candidate_schoolone, $admission_class, $send_mail
    ];

    if (in_array("", $required_fields, true)) {
        $_SESSION["errormsg"] = "Please complete the form";
        header("location: ../admissionform.php");
        exit;
    }

    // Validate phone numbers
    if (
        strlen($father_phonenumber) != 11 ||
        strlen($mother_phonenumber) != 11 ||
        strlen($guardian_phonenumber) != 11
    ) {
        $_SESSION["errormsg"] = "Phone number must be 11 digits";
        header("location: ../admissionform.php");
        exit;
    }

    // Validate NIN
    if (strlen($student_nin) != 11) {
        $_SESSION["errormsg"] = "NIN number must be 11 digits";
        header("location: ../admissionform.php");
        exit;
    }

    // If no errors, process form
    $admit = new Admission;
    $form_id = $admit->insert_details(
        $student_name, $student_gender, $student_dob, $student_placeofbirth, $student_nin,
        $student_hometown, $student_lga, $student_stateoforigin,
        $father_name, $father_address, $father_occupation, $father_phonenumber,
        $mother_name, $mother_address, $mother_occupation, $mother_phonenumber,
        $guardian_name, $guardian_address, $guardian_occupation, $guardian_phonenumber,
        $candidate_schoolone, $candidate_schooltwo, $candidate_schoolthree,
        $admission_class, $send_mail
    );

    unset($_SESSION['payment_refno']);
    $_SESSION['form_submitted'] = true;
    unset($_SESSION['form_data']);
    $_SESSION["feedback"] = "Form completed, proceed to download your admission form.";
    header("Location: ../download_admissionform.php?form_id=" . $form_id);
    exit();
} else {
    $_SESSION["errormsg"] = "Please fill the form";
    header("location: ../admissionform.php");
    exit();
}
