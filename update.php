<?php
ob_start();
include 'db.php';
$db = new Database();
try {
    if (isset($_POST['update'])) {
        $getId = $_POST['idOfTask'];
        $updateTask = $_POST['updateTask'];
        $sql = "UPDATE items SET content='$updateTask' WHERE id='$getId'";
        if ($db->db_num($sql)) {
            header('location:index.php');
        }
    }
} catch (mysqli_sql_exception $e) {
    echo $e;
}
ob_end_flush();
