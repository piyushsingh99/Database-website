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

    //  $username =  mysqli_real_escape_string($con,$_POST['username']);
    // $email =  mysqli_real_escape_string($con,$_POST['email']);
    //  $password =  mysqli_real_escape_string($con,$_POST['password']);
   $username=$_POST['username'];
    $password=$_POST['password'];
$pass=password_hash($password,PASSWORD_BCRYPT);
// echo $pass;

    $emailsearch="SELECT * FROM `users` WHERE ( username='$username' or  password='$pass') ";

    $qu=mysqli_query($con,$emailsearch);

    $count=mysqli_num_rows($qu);
    
             if($count){
                ?>
                <script>
                        alert(" login ");
                          window.open('main.php','_self');
                        </script>
                <?php

                       
             }
                else
                {?>
                <script>
                        alert(" invalid username ");
                        //  window.open('index.php','_self');
                        </script>
                <?php

                    }



}




?>

