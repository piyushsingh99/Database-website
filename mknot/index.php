<?php
session_start();
// if(isset($_SESSION['username']))
// {
// header('location:main.php');

// }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form and Registration Form</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
               <a href=""> <img src="img/facebook.png" height="20"></a>
                 <a href=""> <img src="img/Google.png" height="20"></a>
                 <a href=""> <img src="img/Twitter.png" height="20"></a>

                
            </div>
            <form action="login.php" method="post" id="login" class="input-group">
            <input type="text" name="username" class="input-field" placeholder="Username" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
               <br><br>
                <button type="submit" name="submit" class="submit-btn">Log in</button>
            </form>
            <form action="register.php" method="post" id="register" class="input-group">
                <input type="text" name="username" class="input-field" placeholder="Username" required>
                <input type="email"  name="email" class="input-field" placeholder="Email id" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
               <br><br>
                <button type="submit" name="submit" class="submit-btn">Register</button>
            </form>
        </div>
        
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px"
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0"
        }
        

    </script>

</body>
</html>