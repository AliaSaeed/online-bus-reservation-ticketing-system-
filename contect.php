<!-- Footer of the Page -->
<!DOCTYPE html>
<html>
    <head>
        <title>Online Booking Ticket System</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!----icons faimly link-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">                                                                
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
   <!----fonts faimly link-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <style>
  
  /* background image in home page style */
  .heading1{
   background-size: cover !important;
   background-position: center !important;
   padding-top: 3rem;
   padding-bottom: 4rem;
   display: flex;
   align-items: center;
   justify-content: center;
  
     /* Add the blur effect */
  filter: blur(2px);
  -webkit-filter: blur(2px);

  }
  </style>
</head>
<body>
  <!-- navbar--->  
<?php include 'menu.php'; ?>
<!-- about us page--->
<div class ="heading1" style="background:url(images/contect.jpg) no-repeat">
<h2 class="text-center">Contact us </h2>
    </div><br>
    <!---contects us-->
    <section class="my-3">
  <div class="py=5">
  
</div>
         <!-- section-->

<section>

<div class="contect-container">
<div class="form-container">
  <h5> Message Us</h5>
<form action="userinfo.php" method="post" class="contect-form">
    
<input type="text"  placeholder="Your Name"  required>
    
<input type="email" name="" id="" placeholder="Email" required>
     
<input type="number" placeholder="mobile"  required>
            
<textarea name="" id="" cols="25" rows="8" placeholder="Comment"  required></textarea>
<input type="submit" value="Send"  class="send">   
    </form>
    </div>
    <!-- Map -->
    
    </div>
</section><br><br>


    
   <!-- section Footer Page -->
<section class="footer">
  <div class="box-container">
    <div class="box">
      <h5>Quick link</h5>
   <a  href="index.php"><i class="fa fa-angle-right"></i>Home <span class="sr-only">(current)</span></a>
      <a  href="about.php"><i class="fa fa-angle-right"></i>About us</a>
      <a  href="pakcges.php"><i class="fa fa-angle-right"></i>pakcges</a>
      <a  href="services.php"><i class="fa fa-angle-right"></i>Services</a>
    <a  href="contect.php"><i class="fa fa-angle-right"></i>Contect us</a>
      <a  href="otr.php"><i class="fa fa-angle-right"></i>online ticket booking</a>
    </div>
    <div class="box">
      <h5>contect info</h5>
      <a  href="#"><i class="fa fa-phone" aria-hidden="true"></i>+92 09 0977906</a>
      <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>aliasaeed1313@gmail.com</a>
      <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>pakistan, ISLAMABAD</a>
    </div>
    <div class="box">
      <h5>folow us</h5>
      <a  href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i>facebook</a>
      <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a>
      <a href="#"><i class="fa fa-google" aria-hidden="true"></i>googel</a>
    </div>
  </div>
		           <div class="credit">created by<span>alia web developer</span>
                | all rights reserved.</div>
</section>
              </footer>
  
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 <!-- script file link-->
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
 <!-- script file link-->
 <script src="js/script.js"></script>
</body>
</html>