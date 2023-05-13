<?php
require_once "Php/init.php";
# Starter kit for front end.
// This is to test of the connection is working.
// $con = new Config();
// $con->con();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="resource/css/styles.css">
    <link rel="stylesheet" href="css/styles.css">

    <title>Todo list</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark shadow">
      <span class="navbar-brand mb-0 h1">Todo List</span>
    </nav>

    <div class="container mt-5">
      <?php
      CRUDTask();
      ?>
      <form action="" method="GET">
        <div class="row">
          <div class="col-md-9 form-group">
            <input class="form-control" type="text" name="items" placeholder="Insert a new Task" required/>
          </div>
          <div class="col-md">
            <input class="btn btn-success"type="submit" value="Add Task"/>
          </div>
        </div>
      </form>
      <?php
      viewT();
      ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
