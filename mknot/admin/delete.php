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


$id=$_GET['idth'];
$quuer="DELETE FROM `file` WHERE id=$id";

$ru=mysqli_query($con,$quuer);

if($ru)
{
?>
<script>
alert('delete successfully');


</script>
<?php

}
else{
?>
<script>
alert("no delete");
</script>
<?php



}

header('location:dashbord.php');



?>