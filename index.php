<!DOCTYPE html>

<?php include 'db.php';
$query = 'SELECT * from tasks';
// $results=$db->query($query); //oops style
$results = mysqli_query($db, $query) //procedural style


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
      <h2>Todo List</h2>
    </center>
    <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#addTask">Add</button>
    <!-- <button type="button" onclick="window.print()" class="btn btn-secondary pull-right">Print</button> -->

    <hr>
    <!-- modal start -->
    <div class="modal fade" id="addTask" tabindex="-1" aria-labelledby="AddTask" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enter Task</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="get.php" method='post'>

              <input type="text" name='newTask' class="form-control" required placeholder="Add Task here">


          </div>
          <div class="modal-footer">
            <button type="submit" name='send' class="btn btn-primary">Add Task</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- //modal end -->




    <!-- //todolist -->
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Task</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php

              // while ($row = $results->fetch_assoc()) {
              while ($row = mysqli_fetch_assoc($results)) :
                // var_dump($row); //displays details about the variable
              ?>


                <th scope="row"><?= $row["id"] ?></th>
                <td><?= $row["task"] ?></td>
                <!-- <button type="button" class="btn btn-success " data-bs-target="#addTask">Add</button> -->
                <td><a href="./update.php?id=<?=$row['id']?>"  class="btn updateBtn btn-success">Edit</a></td>
                <td><a href="./delete.php?id=<?= $row['id'] ?>" class="btn  btn-danger">Delete</a></td>
            </tr>


          <?php endwhile; ?>


          </tbody>
        </table>


      </div>

    </div>

  </div>

 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>