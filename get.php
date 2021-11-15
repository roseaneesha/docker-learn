<?php 
include 'db.php';

$driver= new mysqli_driver();
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
if(isset($_POST['send'])){
    
     
    try{
        $newTask = $_POST['newTask'];
        $curDate = date("Y/m/d");
        // echo $newTask;

        $sqlQuery = "INSERT INTO tasks (task,time_stamp) VALUES ('$newTask','$curDate')";

        $val = mysqli_query($db, $sqlQuery);
        if($val){
            header('location: index.php');
        }
    }
    catch(mysqli_sql_exception $e){
        echo $e;
    }

}




?>