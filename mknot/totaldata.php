<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:index.php');
}


?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/jpg" href="img/knot.png">
    <title>Myknot Live</title>


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        transition: all 0.3s;
        scroll-behavior: smooth;
    }

    .pos {
        padding: 30px 10px !important;
        font-size: 25px;
        background-color: rgba(52, 64, 235, 0.3);


    }

    .pos a:hover {
        background-color: lime;
        padding: 5px;


    }

    .shrink {
        padding: 10px 10px !important;
        font-size: 25px;

    }

    .pos img {
        width: 100px;
        height: 50px;

    }


    .sec1 {
        width: 100%;
        height: 100vh;
        background-image: url("img/new.jpg");
        background-size: 100% 100%;
        background-attachment: fixed;
    }

    .image {
        display: grid;
        place-items: center;
    }

    .mid {
        width: 100%;
        height: 100vh;
        color: red;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

        word-spacing: 5px;


    }

    .mid span {
        color: white;
    }


    .inner-mid {
        width: auto;
        height: 300px;
        padding: 15px 50px;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.5);
        display: grid;
        place-items: center;
    }


    #scrollUp {
        bottom: 20px;
        right: 20px;
        width: 38px;
        height: 38px;
        background-color: red;
        border-radius: 50%;
        padding-left: 12px;
        padding-top: 5px;
        text-decoration: none;


    }


    footer {
        width: 100%;
        height: auto;
        background-color: black;
        padding: 50px 0px;

    }

    .con ul li {
        list-style: none;
        color: white;
        font-size: 20px;
    }

    .con {
        display: flex;
        justify-content: space-around;
        align-items: center;

    }


    .con2 {
        display: flex;
        justify-content: space-around;
        align-items: center;

    }

    i {
        color: lime;
    }

    .icon {
        width: 50px;
        height: 50px;
        background-color: white;
        border-radius: 50%;
        display: grid;
        place-content: center;
    }

    .icon:hover {
        background-color: black;

    }


    i:hover {

        color: white;
    }


    .con ul li a {
        text-decoration: none;
        color: white;
    }

    .jumbotron {
        background-color: orange;

    }

    .jumbotron ul li {
        list-style: none;
    }





    /* collaspe */

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: green;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: red;
        background-color: green;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }

    #mySearch {
        width: 100%;
        font-size: 18px;
        padding: 11px;
        border: 1px solid #ddd;
    }

    /* Style the navigation menu inside the left column */
    #myMenu {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    #myMenu li a {
        padding: 12px;
        text-decoration: none;
        color: black;
        display: block
    }

    #myMenu li a:hover {
        background-color: #eee;
    }
    </style>


</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-light   fixed-top pos">
            <div class="container">
                <a class="navbar-brand" href="main.php">
                    <img src="img/knot.png" alt="myknot" class="img-fluid">
                </a>
                <h4 class="text-white font-weight-bold ml-auto pr-2"><i class="fa fa-user-o"></i>
                    <?php echo $_SESSION['username']; ?></h4>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-white font-weight-bold px-3" href="main.php">HOME </a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link text-white font-weight-bold px-3 dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                COMPLETE DATABASE
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" id="ceo" onclick="ceo()" href="#database">CEO</a>

                                <a class="dropdown-item" id="employee" onclick="employee()"
                                    href="#database">Employee</a>
                                <a class="dropdown-item" id="student" onclick="student()" href="#database">Student</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white font-weight-bold px-3" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white font-weight-bold px-3" href="logout.php">LOGOUT</a>
                        </li>



                    </ul>

                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <h2 style="color:yellow">Database</h2>
                        <br>
                        <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.."
                            title="Type in a category">
                        <ul id="myMenu">
                            <li><a id="ceo" onclick="ceo()" href="#database">CEO</a></li>
                            <li><a id="student" onclick="student()" href="#database">Student</a></li>
                            <li><a id="employee" onclick="employee()" href="#database">Employee</a></li>
                            <li><a id="hr" onclick="hr()" href="#database">HR</a></li>
                            <li><a id="doctor" onclick="doctor()" href="#database">Doctor</a></li>
                            <li><a id="job" onclick="job()" href="#database">Job Seeker</a></li>
                            <li><a id="teacher" onclick="teacher()" href="#database">Teacher</a></li>


                            <br><br>

                        </ul>


                    </div>



                    <span style="cursor:pointer" onclick="openNav()" class="pl-3"><i class="fa fa-search"></i></span>

                </div>
            </div>
        </nav>


    </header>

    <section id="one" class="sec1">
        <div class="mid">
            <div class="inner-mid" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <h2>Welcome to Our <span>Myknot</span></h2>
                <h4>Want to start new business ??</h4>
                <a href="main.php" class="btn btn-outline-light">Get started</a>
                <a type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#myModal">
                    Subscription
                </a>

            </div>

        </div>
    </section>
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1>MYKNOT LIVE</h1>
            <p class="w-75 mx-auto">Always test your software with a "worst-case scenario" amount of sample data, to get
                an accurate sense of its performance in the real world.

                These data files are of super high quality. See the description at the right. Included fields are:</p>
            <ul>
                <li>Name</li>
                <li>Email</li>
                <li>Phone</li>
            </ul>
        </div>
    </div>
    <br>

    <div class="text-center p-3" id="show">
        <h2>Want to Buy Total Data? </h2>
        <br>
        <a href="whole.php" class="btn btn-info" id="bt">Click Here</a>
        <center>
            <hr class="w-50 ">
        </center>
    </div>

    <br><br>


    <section id="database" class="hidebox">
        <div class="container">
            <div class="row pt-5">


                <div class="col-lg-6 col-md-8 col-10 mx-auto">
                    <div class="card text-center">
                        <div class="card-header " id="oneone"></div>
                        <div class="card-body ">
                            <div class="">

                                <label>Choose Numbers of Row for Data :</label>
                                <br>
                                <select onchange="mytotal()" id="amo" name="amount">
                                    <option value="500">500 </option>
                                    <option value="5000">5000 </option>
                                    <option value="10000">10000 </option>
                                    <option value="25000">25000 </option>
                                    <option value="50000">50000 </option>
                                    <option value="100000">100000 </option>
                                    <option value="500000">500000 </option>
                                </select>
                                <br><br>



                                <div class="form-group ">
                                    <label>Amount:</label>
                                    <center><input type="text" class="form-control w-50" id="total" name="totalm"
                                            value="1500" readonly="readonly" required></center>
                                </div>

                            </div>
                            <br>
                            <!-- after clicking on "BUY NOW" we redirect to Cashfee  -->
                            <a href="https://www.cashfree.com/product/6043" id="btn1"
                                class="btn btn-primary btn-block">BUY NOW</a>
                            <a href="https://www.cashfree.com/product/6315" id="btn2"
                                class="btn btn-primary btn-block">BUY NOW</a>
                            <a href="https://www.cashfree.com/product/6316" id="btn3"
                                class="btn btn-primary btn-block">BUY NOW</a>
                            <a href="https://www.cashfree.com/product/6317" id="btn4"
                                class="btn btn-primary btn-block">BUY NOW</a>
                            <a href="https://www.cashfree.com/product/6319" id="btn5"
                                class="btn btn-primary btn-block">BUY NOW</a>
                            <a href="https://www.cashfree.com/product/6320" id="btn6"
                                class="btn btn-primary btn-block">BUY NOW</a>
                            <a href="https://www.cashfree.com/product/6321" id="btn7"
                                class="btn btn-primary btn-block">BUY NOW</a>

                            <!-- <button   onclick="inc()" class="btn btn-primary btn-block">BUY NOW</button>  -->
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>



    <br><br>



    <!-- <section id="data">

<div class="container">
<h2 class="text-center">All Data</h2>
<center><hr class="w-50 "></center>
<br><br>
<div class="row">
<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'myknot');





$qu = "SELECT * FROM `file` ";
$run = mysqli_query($con, $qu);
while ($row = mysqli_fetch_array($run)) { ?>
    

<div class="col-lg-3 col-md-6 col-10 mx-auto pb-3">
<div class="card text-center">
<div class="card-header"><?php echo $row['category']; ?> Data</div>
<div class="card-body">
<h3> <?php echo $row['record']; ?> records</h3>
<h3>₹ <?php echo $row['price']; ?></h3>
<a href="pay.php?id=<?php echo $row['id']; ?> " class="btn btn-primary btn-block">BUY NOW</a>

</div>
</div>
</div>




<?php
}






?>


</div>
</div>



</section> -->

    <section id="free">


        <div class="container text-center">
            <h2 class="text-center">Some free Data</h2>
            <small class="text-center">For checking</small>
            <center>
                <hr class="w-50 ">
            </center>
            <br><br>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-11 mx-auto pb-2">

                    <div class="card text-center">
                        <div class="card-header">CEO Data</div>
                        <div class="card-body">
                            <h3> 100 records</h3>
                            <h3>₹ 0.00</h3>
                            <a href="download.php?file=datafile/us1-500" target="_atanu"
                                class="btn btn-primary btn-block">Check Now</a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mx-auto pb-2">

                    <div class="card text-center">
                        <div class="card-header">Employee Data</div>
                        <div class="card-body">
                            <h3> 100 records</h3>
                            <h3>₹ 0.00</h3>
                            <a href="download.php?file=datafile/us1-500" target="_atanu"
                                class="btn btn-primary btn-block">Check Now</a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mx-auto pb-2">

                    <div class="card text-center">
                        <div class="card-header">Student Data</div>
                        <div class="card-body">
                            <h3> 100 records</h3>
                            <h3>₹ 0.00</h3>
                            <a href="download.php?file=datafile/us1-500" target="_atanu"
                                class="btn btn-primary btn-block">Check Now</a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mx-auto pb-2">

                    <div class="card text-center">
                        <div class="card-header">Doctor Data</div>
                        <div class="card-body">
                            <h3> 100 records</h3>
                            <h3>₹ 0.00</h3>
                            <a href="download.php?file=datafile/us1-500" target="_atanu"
                                class="btn btn-primary btn-block">Check Now</a>

                        </div>
                    </div>
                </div>





            </div>



        </div>



        </div>

    </section>







    <br>


    <br>



    <footer>
        <div class="container">
            <div class="con">
                <div>
                    <ul>
                        <li>Myknot Services OPC Private Limited</li>

                        <li> bengaluru, karnataka</li>

                        <li> 09353690229</li>

                    </ul>
                </div>
                <div>
                    <ul>
                        <li class="p-2"> <a href="#one">HOME</a></li>
                        <li class="p-2"> <a href="#two">ABOUT</a></li>
                        <li class="p-2"> <a href="#three">SERVICES</a></li>
                        <br>

                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#myModal">
                            Subscription
                        </button>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Email Subscription</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="form-group">
                                                <label for="email">Name:</label>
                                                <input type="text" class="form-control" placeholder="Enter name"
                                                    id="name" required autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email address:</label>
                                                <input type="email" class="form-control" placeholder="Enter email"
                                                    id="email" required autocomplete="off">
                                            </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>





                    </ul>
                </div>


            </div>
            <br><br>
            <div class="con2">
                <div class="icon">
                    <a href=""><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="icon">
                    <a href=""> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="icon">
                    <a href=""> <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="icon">
                    <a href=""> <i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                </div>
            </div>




        </div>
        <br><br>
        <p class="text-center text-white">COPYRIGHT ©2019 MYKNOT CORPORATION.</p>
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"
        integrity="sha512-gAHP1RIzRzolApS3+PI5UkCtoeBpdxBAtxEPsyqvsPN950Q7oD+UT2hafrcFoF04oshCGLqcSgR5dhUthCcjdA=="
        crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('nav').addClass('shrink');
            // $('nav').removeClass('pos');

        } else {
            //  $('nav').addClass('pos');
            $('nav').removeClass('shrink');


        }
    })

    $(function() {
        $.scrollUp({
            scrollText: '&#8648;',
            //  scrollImg: true

        });
    });
    </script>
    <script>
    AOS.init();
    </script>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }



    function myFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myMenu");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    </script>

    <script>
    document.getElementById("database").style.display = "none";

    document.getElementById("show").style.display = "none";
    document.getElementById("free").style.display = "block";

    //  buy now button

    document.getElementById("btn1").style.display = "block";
    document.getElementById("btn2").style.display = "none";
    document.getElementById("btn3").style.display = "none";
    document.getElementById("btn4").style.display = "none";
    document.getElementById("btn5").style.display = "none";
    document.getElementById("btn6").style.display = "none";
    document.getElementById("btn7").style.display = "none";


    function mytotal() {
        let data_amount = document.getElementById('amo').value;
        var pric = document.getElementById('total').value;

        console.log(data_amount);
        if (data_amount == 500) {
            document.getElementById("total").value = parseInt(data_amount) * 3;
            document.getElementById("btn1").style.display = "block";
            document.getElementById("btn2").style.display = "none";
            document.getElementById("btn3").style.display = "none";
            document.getElementById("btn4").style.display = "none";
            document.getElementById("btn5").style.display = "none";
            document.getElementById("btn6").style.display = "none";
            document.getElementById("btn7").style.display = "none";


        } else if (data_amount == 5000) {
            document.getElementById("total").value = parseInt(data_amount) * 3;
            document.getElementById("btn1").style.display = "none";
            document.getElementById("btn2").style.display = "block";
            document.getElementById("btn3").style.display = "none";
            document.getElementById("btn4").style.display = "none";
            document.getElementById("btn5").style.display = "none";
            document.getElementById("btn6").style.display = "none";
            document.getElementById("btn7").style.display = "none";



        } else if (data_amount == 10000) {
            document.getElementById("total").value = parseInt(data_amount) * 3;
            document.getElementById("btn1").style.display = "none";
            document.getElementById("btn2").style.display = "none";
            document.getElementById("btn3").style.display = "block";
            document.getElementById("btn4").style.display = "none";
            document.getElementById("btn5").style.display = "none";
            document.getElementById("btn6").style.display = "none";
            document.getElementById("btn7").style.display = "none";



        } else if (data_amount == 25000) {
            document.getElementById("total").value = 5000;
            document.getElementById("btn1").style.display = "none";
            document.getElementById("btn2").style.display = "none";
            document.getElementById("btn3").style.display = "none";
            document.getElementById("btn4").style.display = "block";
            document.getElementById("btn5").style.display = "none";
            document.getElementById("btn6").style.display = "none";
            document.getElementById("btn7").style.display = "none";

        } else if (data_amount == 50000) {
            document.getElementById("total").value = 7500;
            document.getElementById("btn1").style.display = "none";
            document.getElementById("btn2").style.display = "none";
            document.getElementById("btn3").style.display = "none";
            document.getElementById("btn4").style.display = "none";
            document.getElementById("btn5").style.display = "block";
            document.getElementById("btn6").style.display = "none";
            document.getElementById("btn7").style.display = "none";

        } else if (data_amount == 100000) {
            document.getElementById("total").value = 10000;
            document.getElementById("btn1").style.display = "none";
            document.getElementById("btn2").style.display = "none";
            document.getElementById("btn3").style.display = "none";
            document.getElementById("btn4").style.display = "none";
            document.getElementById("btn5").style.display = "none";
            document.getElementById("btn6").style.display = "block";
            document.getElementById("btn7").style.display = "none";

        } else if (data_amount == 500000) {
            document.getElementById("total").value = 15000;
            document.getElementById("btn1").style.display = "none";
            document.getElementById("btn2").style.display = "none";
            document.getElementById("btn3").style.display = "none";
            document.getElementById("btn4").style.display = "none";
            document.getElementById("btn5").style.display = "none";
            document.getElementById("btn6").style.display = "none";
            document.getElementById("btn7").style.display = "block";

        }




    }



    function ceo() {
        let val = document.getElementById('ceo').innerText;

        console.log(val);
        document.getElementById("oneone").innerText = val + " Data"

        // document.getElementById("show").innerText="Want to Buy Total Data ?";

        document.getElementById("database").style.display = "block";
        document.getElementById("show").style.display = "block";
        document.getElementById("free").style.display = "none";

    }

    function employee() {
        let val = document.getElementById('employee').innerText;

        console.log(val);
        document.getElementById("oneone").innerText = val + " Data"

        // document.getElementById("show").innerText="Want to Buy Total Data ?";

        document.getElementById("database").style.display = "block";
        document.getElementById("show").style.display = "block";
        document.getElementById("free").style.display = "none";

    }

    function student() {
        let val = document.getElementById('student').innerText;

        console.log(val);
        document.getElementById("oneone").innerText = val + " Data"

        // document.getElementById("show").innerText="Want to Buy Total Data ?";

        document.getElementById("database").style.display = "block";
        document.getElementById("show").style.display = "block";
        document.getElementById("free").style.display = "none";

    }

    function hr() {
        let val = document.getElementById('hr').innerText;

        console.log(val);
        document.getElementById("oneone").innerText = val + " Data"

        // document.getElementById("show").innerText="Want to Buy Total Data ?";

        document.getElementById("database").style.display = "block";
        document.getElementById("show").style.display = "block";
        document.getElementById("free").style.display = "none";

    }

    function doctor() {
        let val = document.getElementById('doctor').innerText;

        console.log(val);
        document.getElementById("oneone").innerText = val + " Data"

        // document.getElementById("show").innerText="Want to Buy Total Data ?";

        document.getElementById("database").style.display = "block";
        document.getElementById("show").style.display = "block";
        document.getElementById("free").style.display = "none";

    }

    function job() {
        let val = document.getElementById('job').innerText;

        console.log(val);
        document.getElementById("oneone").innerText = val + " Data"

        // document.getElementById("show").innerText="Want to Buy Total Data ?";

        document.getElementById("database").style.display = "block";
        document.getElementById("show").style.display = "block";
        document.getElementById("free").style.display = "none";

    }

    function teacher() {
        let val = document.getElementById('teacher').innerText;

        console.log(val);
        document.getElementById("oneone").innerText = val + " Data"

        // document.getElementById("show").innerText="Want to Buy Total Data ?";

        document.getElementById("database").style.display = "block";
        document.getElementById("show").style.display = "block";
        document.getElementById("free").style.display = "none";

    }
    </script>




</body>

</html>