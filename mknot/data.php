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
    </style>


</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-light   fixed-top pos">
            <div class="container">
                <a class="navbar-brand" href="main.php">
                    <img src="img/knot.png" alt="myknot" class="img-fluid">
                </a>
                <h4 class="text-white font-weight-bold ml-auto"><i class="fa fa-user-o"></i>
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
                                Complete Database
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" id="one" onclick="ceo()" href="#database">CEO</a>

                                <a class="dropdown-item" id="two" onclick="employee()" href="#database">Employee</a>
                                <a class="dropdown-item" id="three" onclick="student()" href="#database">Student</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white font-weight-bold px-3" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white font-weight-bold px-3" href="logout.php">LOGOUT</a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>


    </header>

    <section id="one" class="sec1">
        <div class="mid">
            <div class="inner-mid" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <h2>Welcome to Our <span>Myknot</span></h2>
                <h4>Want to start new business ??</h4>
                <a href="#three" class="btn btn-outline-light">Get started</a>
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
    <h3 class="text-center text-success" id="show">For selecting a database click <span class="text-danger">Complete
            Database</span></h3>
    <br>
    <div class="text-center">
        <a href="" class="btn btn-info" id="bt">Click Here</a>

    </div>
    <center>
        <hr class="w-50 ">
    </center>
    <br><br>


    <section id="database" class="hide">
        <div class="container">
            <div class="row pt-5">


                <div class="col-lg-6 col-md-8 col-10 mx-auto">
                    <div class="card text-center">
                        <div class="card-header " id="oneone"></div>
                        <div class="card-body ">
                            <div class="">

                                <label>Choose Numbers of Row for Data :</label>
                                <br>
                                <select onchange="my()" id="amo" name="amount">
                                    <option value="500">500 </option>
                                    <option value="10000">10000 </option>
                                    <option value="50000">50000 </option>
                                    <option value="100000">100000 </option>
                                </select>
                                <br><br>



                                <div class="form-group ">
                                    <label>Amount:</label>
                                    <center><input type="text" class="form-control w-50" id="total" name="total"
                                            value="1500" readonly="readonly" required></center>
                                </div>

                            </div>
                            <br>
                            <a href="https://www.cashfree.com/product/6043" class="btn btn-primary btn-block">BUY
                                NOW</a>
                            <!-- <button   onclick="inc()" class="btn btn-primary btn-block">BUY NOW</button> -->
                        </div>


                    </div>
                </div>








            </div>
        </div>
    </section>
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
    document.getElementById("database").style.display = "none";
    document.getElementById("bt").style.display = "none";

    function my() {
        let data_amount = document.getElementById('amo').value;
        var pric = document.getElementById('total').value;

        console.log(data_amount);
        console.log(pric);
        document.getElementById("total").value = parseInt(data_amount) * 3;



    }



    function ceo() {
        let val = document.getElementById('one').innerText

        console.log(val);
        document.getElementById("oneone").innerText = val + " Data"

        document.getElementById("show").innerText = "Want to Buy Total Data ?";

        document.getElementById("database").style.display = "block";
        document.getElementById("bt").style.display = "inline";
    }


    function employee() {
        let val = document.getElementById('two').innerText
        document.getElementById("database").style.display = "block";
        document.getElementById("bt").style.display = "inline";
        console.log(val);
        document.getElementById("oneone").innerText = val + " Data";
        document.getElementById("show").innerText = "Want to Buy Total Data ?";
    }


    function student() {
        let val = document.getElementById('three').innerText
        document.getElementById("database").style.display = "block";
        document.getElementById("bt").style.display = "inline";
        console.log(val);
        document.getElementById("oneone").innerText = val + " Data"
        document.getElementById("show").innerText = "Want to Buy Total Data ?";
    }
    </script>




</body>

</html>