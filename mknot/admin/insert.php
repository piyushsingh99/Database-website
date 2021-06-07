
<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:main.php');

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="img/knot.png">
    <title>Admin Dashbord</title>
    <style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;

    }
    .jumbotron{
        background-color:orange !important;
    }
    </style>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
<div class="container">
  <a class="navbar-brand text-warning font-weight-bold" href="main.php">MYKNOT</a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link btn btn-outline-success text-white m-2 p-2" href="insert.php">Add Data </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn btn-outline-success text-white m-2 p-2" href="dashbord.php">Show Data </a>
      </li>
      
      
      
    </ul>
    
  </div>
  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
  <br><br>
    <h1>Admin Panel</h1>
   
  </div>
</div>


<div class="container">
      <div class="row">
          
          <div class="col-lg-8 col-md-10 col-10 mx-auto ">
          <br/>
          <div class="shadow bg-white rounded p-3">
              <h2 class="text-center">Add User</h2>
          <form action="admininsert.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label >Category:</label>
    <input type="text" class="form-control" placeholder="Enter Category"  required  autoComplete="off"
    name="category"/>
  </div>
  <div class="form-group">
    <label >Filename:</label>
    <input type="file" class="form-control" required  autoComplete="off"
    name="filename"
    
    />
  </div>
  <div class="form-group">
    <label >Record:</label>
    <input type="text" class="form-control" placeholder="Enter Record"  required autoComplete="off"
    name="record"/>
  </div>
  <div class="form-group">
    <label >Price:</label>
    <input type="text" class="form-control" placeholder="Enter price" required autoComplete="off"
    name="price" />
  </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
</form>
          </div>
         

          </div>
      </div>
  </div>
    
<br>

</body>
</html>