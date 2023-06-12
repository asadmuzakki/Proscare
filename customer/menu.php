<?php 
require "../loginProscare/koneksi.php";
if(!isset($_SESSION['customer'])){
   header("Location: ../loginProscare/index.php");
   exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Menu</title>
   <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
   <script src="menu.js"></script>
   <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>
   <!-- Navbar -->
   <div class="header">
      <img src="Assets\Proscare Logo.png" alt="logo">
      <ul class="nav">
          <li><a href="../customer/Homepage.php"> Home </a></li>
          <li><a href="../customer/Payment.php"> Menu </a></li>
          <li><a href="../Profile/profileCustomer.php"> Profile </a></li>
          <li><a href="../loginProscare/logout.php"> Logout </a></li>
      </ul>
  </div>
   <div class="content">
      <div id="slider">
         <input type="radio" name="slider" id="slide1" checked>
         <input type="radio" name="slider" id="slide2">
         <input type="radio" name="slider" id="slide3">
         <input type="radio" name="slider" id="slide4">
         <div id="slides">
            <div id="overflow">
               <div class="inner">
                  <div class="slide slide_1">
                     <div class="slide-content">
                        <!-- <h2>Slide 1</h2> -->
                        <p>Small Treatment Start from Rp.50.000.00</p>
                     </div>
                  </div>
                  <div class="slide slide_2">
                     <div class="slide-content">
                        <!-- <h2>Slide 2</h2> -->
                        <p>Medium Treatment Start from Rp.100.000.00</p>
                     </div>
                  </div>
                  <div class="slide slide_3">
                     <div class="slide-content">
                        <!-- <h2>Slide 3</h2> -->
                        <p>Full Treatment Start from Rp.150.000.00</p>
                     </div>
                  </div>
                  <!-- <div class="slide slide_4">
                     <div class="slide-content">
                        <h2>Slide 4</h2>
                        <p>Content for Slide 4</p>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
         <div id="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <!-- <label for="slide4"></label> -->
         </div>
         <div id="bullets">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <!-- <label for="slide4"></label> -->
         </div>
      </div>
      </div>

      <!-- About Us -->
      <h1 class="title"> About Us</h1>
      <div class="about">
         <div class="aboutContent">
            <h1>About ProsCare</h1>
            <h3>ProsCare is A Place for Mom's solution for seniors who choose to age in place. We recognize that many older adults want to stay in their own homes as they age. Those seniors, and their caregivers, may need guidance as they plan and prepare for their future care. At Caregivers.com we strive to help families find the right caregiver to help an elderly loved one stay safely and comfortably at home.</h3>
         <br>
         <h1>Our services</h1>
         <h3>ProsCare is able to offer the services of our senior care advisors at no charge to families because our revenue comes from referrals to senior care communities and home care agencies. Income from these sources gives us the ability to offer a wide range of caregiving resources to our users without passing any costs on to the consumer.</h3>
         <br>
         <h1>Senior care reverrals</h1>
         <h3>Our team of knowledgeable Care Advisors can be reached by calling our toll-free phone number (866)-510-9946 or filling out a form when you browse our site.</h3>
         <br>
         <h3>Care Advisors match families with providers in your area that best fit your care needs. Some of these providers pay us a referral fee when a family hires them. Other providers pay us if we send them your name and contact information, regardless of whether you hire them or start care. Still other providers pay us an annual subscription fee to get enhanced features in our directory or on our websites, such as additional photos. Whether a senior care service or product provider pays us or not, we’re committed to connecting you with the best options for you.</h3>
         <br>
         <h3>Our referral service is for informational purposes only. We do not endorse the senior care service providers in our directory. Families are encouraged to read expert information and reviews from other consumers, go on tours, and interview extensively to make sure that a provider is the right fit for you or your loved one.</h3>
         <br>
         <h3> Our vast network of providers helps families across the Indonesian by referring ProsCare from these and other reputable providers:</h3>
      </div>
         <img src="Assets/image 1.png" alt="Validation">
      </div>

   <!-- Footer -->
    <footer>
      <div class="footer">
          <h3>Proscare</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nostrum soluta vel laboriosam cum
              inventore tempore? Dolores, optio. Architecto adipisci nemo reprehenderit voluptates dolorem earum
              tenetur numquam dolore quia sint.</p>
          <ul class="social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
      </div>
      <div class="bottom">
          <p>copyright &copy;2023 ProsCare</p>
      </div>
  </footer>
      
   </body>
   </html>