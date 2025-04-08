<?php
    require_once "Db.php";
    class Admission extends Db
    {
        private $dbcon;
        public function __construct(){
            $this->dbcon = $this->connect();
        }
        public function insert_details($student_name, $student_gender, $student_dob, $student_placeofbirth, $student_nin, $student_hometown, $student_lga, $student_stateoforigin, $father_name, $father_address,$father_occupation, $father_phonenumber, $mother_name, $mother_address, $mother_occupation, $mother_phonenumber, $guardian_name, $guardian_address, $guardian_occupation, $guardian_phonenumber, $candidate_schoolone, $candidate_schooltwo, $candidate_schoolthree, $admission_class, $send_mail){
            $sql = "INSERT INTO admission SET student_name = ?, student_gender = ?, student_dob = ?, student_placeof_birth = ?, student_nin = ?, student_hometown = ?, student_lga = ?, student_stateofOrigin = ?, student_fathersName = ?, fathers_residentialAddress = ?, fathers_occupation = ?, fathers_phone = ?, student_mothersName = ?, mothers_residentialAddress = ?, mothers_occupation = ?, mothers_phone = ?, student_guardianName = ?, guardians_residentialAddress = ?, guardians_occupation = ?, guardians_phone = ?, previousSchool_One =?, previousSchool_Two = ?, previousSchool_Three = ?, admission_class = ?, form_mail = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$student_name, $student_gender, $student_dob, $student_placeofbirth, $student_nin, $student_hometown, $student_lga, $student_stateoforigin, $father_name, $father_address,$father_occupation, $father_phonenumber, $mother_name, $mother_address, $mother_occupation, $mother_phonenumber, $guardian_name, $guardian_address, $guardian_occupation, $guardian_phonenumber, $candidate_schoolone, $candidate_schooltwo, $candidate_schoolthree, $admission_class, $send_mail]);
            return $this->dbcon->lastInsertId();
        }
        public function get_detailsbyId($id){
            $sql = "SELECT * FROM admission WHERE id = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$id]);
            $details = $stmt->fetch(PDO::FETCH_ASSOC);
            return($details);
        }
    }
    // $jaja = new Admission();
    // $jaja->get_detailsbyId("1");
    // $jaja->insert_details("Korede Alonge", "male", "2025-04-22", "Ikorodu", "wh473888923", "Ilawe", "Ekiti state", "Ilawe", "lagbaja", "surulere", "jobless", "0917372829", "lagbaja", "ondo", "jobless", "0917437192", "lagbaja", "ikorodu", "jobless", "0912847872929", "la nursery school","la nursery school","la nursery school", "primary 4", "korede@gmail.com");
?>