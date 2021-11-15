<!DOCTYPE html>

<?php include 'db.php';
try{
    
        $getid = $_GET['id'];
        $query = "SELECT * from tasks WHERE id='.$getid.'";
        // $results=$db->query($query); //oops style
        $results = mysqli_query($db, $query); //procedural style
        $row = mysqli_fetch_assoc($results);
        var_dump($row);
        echo 'hi1';
        if (isset($_POST['send'])) {
            echo 'hi';

            $updateTask = $_POST['updateTask'];
            $sql = "UPDATE tasks SET task='$updateTask' WHERE id='$getid'";
            $val = mysqli_query($db, $sql);
            echo 'hi';
            // header('location: index.php');
            
        }
    
}catch(mysqli_sql_exception $e){
    echo $e;
}



// header('location:index.php');

?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <center>
            <h2>Update List</h2>
        </center>
      
        
        <!-- modal start -->
       
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enter Task</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action=" ./update.php" method='post'>

                            <input type="text" name='updateTask' class="form-control" required placeholder=" Task here">


                    </div>
                    <div class="modal-footer">
                        <button type="submit" name='send' class="btn btn-primary">
                            Save Changes
                        </button>
                    </div>
                    </form>
                </div>
            
        <!-- //modal end -->




      



    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>