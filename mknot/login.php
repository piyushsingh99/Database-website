<?php
session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'myknot');




  $password =  mysqli_real_escape_string($con,$_POST['password']);
    $username =  mysqli_real_escape_string($con,$_POST['username']);
    // $cpassword =  mysqli_real_escape_string($con,$_POST['cpassword']);

    // $pass=password_hash($password,PASSWORD_BCRYPT);
    // $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
    
     $pass=md5($password);

    $emailsearch="select * from users where username='$username' ";

    $qu=mysqli_query($con,$emailsearch);

    $count=mysqli_num_rows($qu);
    
             if($count){
                 
                 $passwordsearch="select * from users where password='$pass' ";

    $quue=mysqli_query($con,$passwordsearch);

    $passdecode=mysqli_num_rows($quue);
                       
                           
                      
                        if($passdecode){
                            $_SESSION['username']=$username;
                                            ?>
                                            <script>
                                            alert("login succesfully");
                                            window.open('main.php','_self');
                                            </script>
                                    <?php
                                    // $_SESSION['username']=$username;
                                //    header('location:main.php');
                                        }
                                    else
                                    {?>
                                    <script>
                                            alert(" password wrong ");
                                            window.open('index.php','_self');
                                            </script>
                                    <?php
                                    
                                        }

                    }
                else
                {?>
                <script>
                        alert(" invalid username ");
                        window.open('index.php','_self');
                        </script>
                <?php

                    }




?>



