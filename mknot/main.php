
<?php
session_start();
if(!isset($_SESSION['username']))
{
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/jpg" href="img/knot.png">
    <title>Myknot Live</title>


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<style>

*{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all 0.3s;
            scroll-behavior: smooth;
        }
        .pos{
            padding: 30px 10px !important;
            font-size: 25px;
            background-color:rgba(52, 64, 235, 0.3);
           
            
        }

        .pos a:hover{
            background-color:lime;
            padding: 5px;
           
            
        }

        .shrink{
            padding: 10px 10px !important;
            font-size: 25px;
            
        }
        .pos img{
            width: 100px;
            height: 50px;

        }


        .sec1{
    width: 100%;
    height: 100vh;
    background-image: url("img/new.jpg");
    background-size: 100% 100%;
    background-attachment: fixed;
}
.image{
    display: grid;
    place-items:center ;
}

.mid{
    width: 100%;
    height: 100vh;
    color:red;
    display:flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    
    word-spacing: 5px;
    
    
}
.mid span{
    color:white;
}


.inner-mid{
    width:auto;
    height: 300px;
    padding: 15px 50px;
    text-align: center;
    background-color:rgba(0,0,0,0.5);
    display: grid;
    place-items:center ;
}


.sec3{
    background-color: snow;
    padding: 50px 10px;
}

.inner_sec3{
    height: auto;
   
    
    background-color:rgba(0,0,0,0.3);
   

}
.sec4{
    width: 100%;
    height: 70vh;
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("img/wo.jpg");
    background-size: 100% 100%;
    background-attachment: fixed;
   

}
.data{
    width: 100%;
    height: 70vh;
    color:white;
 
    display:flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    
    word-spacing: 5px;
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


footer{
    width: 100%;
    height: auto;
    background-color:black;
    padding: 50px 0px;

}
.con ul li{
list-style: none;
color: white;
font-size: 20px;
}
.con{
    display: flex;
    justify-content: space-around;
    align-items: center;
   
}


.con2{
    display: flex;
    justify-content: space-around;
    align-items: center;
    
}
i{
    color:lime;
}

.icon{
    width: 50px;
    height: 50px;
    background-color:white;
    border-radius: 50%;
    display: grid;
place-content: center;
}
.icon:hover{
    background-color:black;
   
}


i:hover{
    
    color: white;
}


.con ul li a{
    text-decoration: none;
    color: white;
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
        <h4 class="text-white font-weight-bold ml-auto"><i class="fa fa-user-o"></i> <?php echo $_SESSION['username'] ;?></h4>
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link text-white font-weight-bold px-3" href="#one">HOME </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white font-weight-bold px-3" href="#two">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white font-weight-bold px-3" href="#three">SERVICES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white font-weight-bold px-3" href="faq.php">FAQ</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link text-white font-weight-bold px-3" data-toggle="modal" data-target="#modalRelatedContent" href="#">ADMIN</a>

                <div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
      
      <div class="modal-content">
       
        <div class="modal-header bg-info">
          <h3 class="heading text-white ">Admin Login</h3>
  
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>
  
        
        <div class="modal-body">
  
            <form action="adminvalid.php" method="post">
                
                <div class="form-group">
                  <label >Email address:</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter email"  required>
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" class="form-control" name="password" placeholder="Enter password"  required>
                </div>

               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>
     
    </div>
                

                        </li> -->

                        







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
   <div class="inner-mid" data-aos="flip-left"
   data-aos-easing="ease-out-cubic"
   data-aos-duration="2000">
    <h2>Welcome to Our <span >Myknot</span></h2>
    <h4>Want to start new business ??</h4>
   <a href="#three" class="btn btn-outline-light">Get started</a>
   <a type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#myModal">
    Subscription
   </a>
    
   </div>

</div>
</section>
<section id="two" class="sec2">
    <div class="container text-center">
        <br><br>
        <h2 class=" text-primary font-weight-bold">ABOUT</h2>
       <center> <hr class="w-25 "></center>
        <br><br>
        <div class="row">
            <div class="col-lg-4 col-md-5 col-10 mx-auto pb-5 image" data-aos="fade-down-right">
                <img src="img/showcase.jpeg" alt="myknot-about" class="img-fluid">
            </div>
            <div class="col-lg-8 col-md-7 col-10 mx-auto "data-aos="zoom-in">
                <p>
                    Welcome to MyKnot Services OPC Pvt. Ltd., your number one source for all things MyKnot Jomkes. We're dedicated to providing you the very best of our services, with an emphasis on gaming tournaments, contest and Jomkes jokes.
                    <br>
 
Founded in 2019 by Gowtham Kumar D., MyKnot Services OPC Pvt. Ltd. has come a long way from its beginnings in Bangalore. When Gowtham Kumar D. first started out, his passion for providing quality services to customers at cheapest cost drove them to start their own business. <br>
 
Our services include gaming tournaments, contests, Jomkes jokes, database services and digital marketing services. All the services are provided at 0 pricing or at the lowest possible cost. Support of customers and society is what has given us a chance to provided the services at the lowest cost considering no compromise with the quality. <br>
 
We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
                </p>
               
            </div>
        </div>

    </div>
</section>
<br><br>

<section id="three" class="sec3">
    <div class="container ">

        <br><br>
        <h2 class=" text-danger font-weight-bold text-center">SERVICES</h2>
       <center> <hr class="w-25 "></center>
        <br><br>
        <div class="inner_sec3" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
                       <div class="row">
               <div class="col-lg-6 col-md-6 col-10 text-white p-5 mx-auto" data-aos="fade-left">
                <h3 class="text-primary">Data Pricing structure :- </h3>
                    <ol>
                        <li>Minimum data which a person can buy - 500 rows</li>
                        <li>Pricing structure for anything less than 10,000data = 3rs per data</li>
                        <li>Pricing structure for 1lakh data = 10,000 RS.</li>
                        <li>Pricing structure for 98crore whole data is 25,000-30,000</li>
                    </ol>
    
               </div>
               <div class="col-lg-6 col-md-6 col-10 text-white p-5 mx-auto" data-aos="fade-right">
                   <h5>
                    Our Services includes: Digital Marketing, Lead Generation, Bulk Database, Organic SEO, Market Research, Online Gaming Platform etc., All at and affordable prices and easy access to every one. 
                   </h5>
               </div>
               
           </div>
        </div>

    </div>




</section>




<section id="four" class="sec4" >
<div class="container">
    <div class="data" data-aos="fade-right"
    data-aos-offset="300"
    data-aos-easing="ease-in-sine">
        <h4>We provide A-Z solution from Database, Lead Generation, Digital Marketing, Article Writing, Blog Creation, Gaming Etc.,</h4>
        <h2>Want to buy Data ??</h2>
        <a href="totaldata.php" class="btn btn-outline-warning">Buy now</a>
    
    
    </div>
</div>
</section>
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
                                    <input type="text" class="form-control" placeholder="Enter name" id="name" required autocomplete="off">
                                  </div>
                                <div class="form-group">
                                  <label for="email">Email address:</label>
                                  <input type="email" class="form-control" placeholder="Enter email" id="email" required autocomplete="off">
                                </div>
                              
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        </div >
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js" integrity="sha512-gAHP1RIzRzolApS3+PI5UkCtoeBpdxBAtxEPsyqvsPN950Q7oD+UT2hafrcFoF04oshCGLqcSgR5dhUthCcjdA==" crossorigin="anonymous"></script>
    
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

  $(function () {
$.scrollUp({
scrollText:'&#8648;',
//  scrollImg: true

});
});



    </script>
    <script>
          AOS.init();
         

    </script>




  </body>
</html>
