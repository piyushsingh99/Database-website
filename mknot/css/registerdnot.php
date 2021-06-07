<?php

$con=mysqli_connect('localhost','root','','myknot');
    if($con){
        ?>
        <script>
        alert("connect succesfully");
        </script>
<?php
    }
else
{?>
<script>
        alert(" no connection ");
        </script>
<?php

    }

if(isset($_POST['submit']))
{
    $username =  mysqli_real_escape_string($con,$_POST['username']);
    $email =  mysqli_real_escape_string($con,$_POST['email']);
    $password =  mysqli_real_escape_string($con,$_POST['password']);
    // $cpassword =  mysqli_real_escape_string($con,$_POST['cpassword']);

    $pass=password_hash($password,PASSWORD_BCRYPT);
    // $cpass=password_hash($cpassword,PASSWORD_BCRYPT);


    $emailquery="select * from users where email='$email' ";
    $query=mysqli_query($con,$emailquery);
    $num=mysqli_num_rows($query);

    if($num>0)
    {
        ?>
        <script>
        alert("email already exist");
        window.open('index.php','_self');
        </script>

        
<?php
// header('location:index.php');

    }
    else{
        ?>
        <script>
        alert("insert succesfully");
        </script>

<?php

        $incertquery="INSERT INTO  users ( username,email,password) VALUES ('$username','$email','$pass')";
        $passquery=mysqli_query($con,$incertquery);
        
// header('location:main.php');

?>
<script>
window.open('main.php','_self');
</script>
<?php



    }



}






?>

