<?php
ob_start();
include 'db.php';
$db = new Database();

try {
    $id = $_GET['id'];
    $sqlQuery = "DELETE FROM items WHERE id=$id ";
    if ($db->db_num($sqlQuery)) {
        header('location:index.php');
    }
} catch (mysqli_sql_exception $e) {
    echo $e;
}
ob_end_flush();
