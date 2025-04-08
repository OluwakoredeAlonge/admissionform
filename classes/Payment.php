<?php
require_once "Db.php";
class Payment extends Db
{
    private $dbcon;
    public function __construct()
    {
        $this->dbcon = $this->connect();
    }
    public function get_pay_ref($ref)
    {
        $sql = "SELECT * FROM payment WHERE payment_refno = ? AND payment_status = 'completed' LIMIT 1";
        $stmt = $this->dbcon->prepare($sql);
        $stmt->execute([$ref]);
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        return $record;
    }
    public function record_pay($fname, $email, $phone, $amount, $refno)
    {
        $sql = "INSERT INTO payment SET payment_method = ?, payee_name = ?, payee_email = ?,  payee_phone = ?, payment_amount = ?, payment_refno = ?";
        $stmt = $this->dbcon->prepare($sql);
        $stmt->execute(["card", $fname, $email, $phone, $amount, $refno]);
        return true;
    }
    public function update_payment($status, $ref)
    {
        $sql = "UPDATE payment SET payment_status = ? WHERE payment_refno = ? LIMIT 1";
        $stmt = $this->dbcon->prepare($sql);
        $stmt->execute([$status, $ref]);
        return true;
    }
}
// $jaja = new Payment();
// $jaja->update_payment("completed", "TXN_461798937");
// $jaja->record_pay("Korede Alonge", "mickyalonge@gmail.com", "08140155828", "5000", "489yejfjehe");
