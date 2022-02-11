<?php
ob_start();
include 'db.php';
$db = new Database();
$driver = new mysqli_driver();
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
if (isset($_POST['send'])) {
    try {
        $newTask = $_POST['newTask'];
        $curDate = date("Y/m/d");
        $sqlQuery = "INSERT INTO items (content,date) VALUES ('$newTask','$curDate')";
        $val = $db->db_num($sqlQuery);
        if ($val) {
            header('location:index.php');
        }
    } catch (mysqli_sql_exception $e) {
        echo $e;
    }
}
ob_end_flush();
