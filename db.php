 <?php
    // $dsn= 'mysql:127.0.0.1:3306;dbname=tasks';
    // $username = 'root';
    // $password = '';
    
    // try {
    //     //code...
    //     $db = new PDO($dsn,$username,$password);
    //     echo 'connected';
    // } catch (PDOException $e) {
    //     //throw $th;
    //     echo $e->getMessage();
    // }



    // $db= new Mysqli;
    // $db->connect('localhost', 'root', '', 'todolist');
    // if($db){
    //     echo "success";
    // }

    $db=  mysqli_connect('localhost','root','','todolist');
    if(!$db){
        // echo"connection made";
        echo "Connection error";

    }
?> 