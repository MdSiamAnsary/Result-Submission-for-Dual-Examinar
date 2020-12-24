<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:index.php');

}

$user = $_SESSION['username'];

include_once('dbcon.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link rel="icon" href="images/icon.png" type="image/x-icon" />

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

 


 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 style="font-family: LORA" class="logo mr-auto">
        <!-- <a href="home.php"> -->
        <?php

          $con=mysqli_connect("127.0.0.1","root","","resultsubmissionfordualexaminar");
          $query="Select * from teachers_table where username='$user'";
          $result= mysqli_query($con,$query);

          while($row = mysqli_fetch_array($result))
          {
            echo "Username : ".$row["username"]."<br>";  
          }

        ?>
        <!-- </a> -->
      </h1>
        
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a id="navl1" href="home.php" class="btn btn-primary" 
            style="font-family: Lora; font-size: 1.2em; color: white; font-style: bold">Home</a></li>
          <li><a id="navl2" href="php_laliga.php" class="btn btn-success" 
            style="font-family: Lora; font-size: 1.2em; color: white; font-style: bold">Enter Marks</a></li>
          <li><a id="navl3" href="php_epl.php" class="btn btn-info" 
            style="font-family: Lora; font-size: 1.2em; color: white; font-style: bold">Check Marks</a></li>
          
        </ul>
      </nav>
      <a id="logout" href="logout.php" class="get-started-btn scrollto">LOG OUT</a>
    </div>
  </header><!-- End Header -->

 
  <section id="intro" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="section-title">
          <br>
          
          <h2 id="siteid">Sports Corner</h2>
          <h5 id="cruyffquoteid"><q>Soccer is simple, but it is difficult to play simple.</q> - Johan Cruyff</h5>
          <p id="sitedescription" style="color: #000; font-size: 1.2em; font-family: lora ">
            The most popular sport in world is football (which Americans call Soccer!). 
            Estimated number of fans of this sport is about 3.5 Billion.
            On this site, you can check out the current positions of the teams of the top five football leagues in the world. 
          </p>
        </div>
      </div>
    
    </div>
  </section>

  <main id="allleagues">

    
    <section id="laliga" class="laliga">

      <div class="container" data-aos="fade-up">

        
      </div>
    </section> 





     <section id="epl" class="epl">

      <div class="container" data-aos="fade-up">

        
        
      </div>
    </section> 

  </main>




  <section id="bundesliga" class="bundesliga">

      <div class="container" data-aos="fade-up">

        

        
      </div>
    </section> 


    <section id="ligueone" class="ligueone">

      <div class="container" data-aos="fade-up">

       
      </div>
    </section> 

    <section id="seriea" class="seriea">

      <div class="container" data-aos="fade-up">

        
      </div>
    </section> 

  </main>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>