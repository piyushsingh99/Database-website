<?php
session_start();

if(isset($_POST['submit']))
{
$con=mysqli_connect('localhost','root');
if($con){
  ?>
  <script>
  alert('database connected');
  
  </script>
  <?php

}
else{
echo"not connect";

}
mysqli_select_db($con,'myknot');

$category=$_POST['category'];
$filename=$_FILES['filename']['name'];
$record=$_POST['record'];
$price=$_POST['price'];


// $temp=$_FILES['image']['tmp_name'];


// move_uploaded_file($temp,"dataimage/$image");

$q="select * from file where ( category='$category' AND filename='$filename') ";

   $result=mysqli_query($con,$q);

	$num=mysqli_num_rows($result);

if($num == 1)
{
?>

<script>
alert('data already present in database');
window.open('insert.php','_self');
</script>

<?php
}
else{



  $qy="insert into file (category,filename,record,price) values('$category','$filename','$record','$price')";


mysqli_query($con,$qy);

?>
<script>
alert('data insert successfully');
window.open('dashbord.php','_self');
</script>
<?php
}



}




?>
