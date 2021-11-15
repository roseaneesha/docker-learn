<?php

 include 'db.php';
 
 try{
    $id = $_GET['id'];
    $sqlQuery = "DELETE FROM tasks WHERE id=$id ";
    if( mysqli_query($db, $sqlQuery)){
        header('location:index.php');
    }

 }catch(mysqli_sql_exception $e){
     echo $e;
 }
?>