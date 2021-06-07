
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
<div class="container  m-auto text-center">

        <div class="table-responsive-sm">          
            <table class="table table-bordered">
              <thead>
                <tr>
                  
                  <th>CATEGORY</th>
                  <th>FILENAME</th>
                  <th>RECORD</th>
                 
                  <th>PRICE</th>
                  
                  <th colspan="2">OPERATION</th>
                  
                </tr>
              </thead>
              <tbody>

<?php
$con=mysqli_connect('localhost','root','','myknot');
if($con){
?>
<script>
alert("connected successfully");
</script>
<?php
}
else{

?>
<script>
alert(" not connected ");
</script>
<?php

}

$sequery="SELECT * FROM `file`";
$query=mysqli_query($con,$sequery);
$nums=mysqli_num_rows($query);

while($data= mysqli_fetch_array($query))
{
 ?>

                <tr>
                  
                  <td><?php echo $data['category']; ?></td>
                  <td><?php echo $data['filename']; ?></td>
                  <td><?php echo $data['record']; ?></td>
                  <td><?php echo $data['price']; ?></td>
                  
                  <td><a href="update.php?id=<?php echo $data['id']; ?> " data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o" ></i></a></td>
                  <td><a href="delete.php?idth=<?php echo $data['id']; ?> " onclick=" return del()" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash" ></i></a></td>
                  
                </tr>

<?php


}


?>
              </tbody>
            </table>
            </div>
          </div>

          <script>
            $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip();
            });


function del()
{

return confirm('Are u sure you want to delete this data???');

}


            </script>

</body>
</html>