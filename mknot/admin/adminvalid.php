

<?php
session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'myknot');
$email=$_POST['email'];

$password=$_POST['password'];

$q="select * from admin where (email='$email' && password='$password')";

   $result=mysqli_query($con,$q);

	$num=mysqli_num_rows($result);

if($num == 1)
{
    $_SESSION['user']=$email;
header('location:dashbord.php');

}
else{
?>

<script>
alert('password and username not match');
window.open('main.php','_self');
</script>

<?php




}

?>