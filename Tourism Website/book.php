<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <meta name="viewport" content="width=device=width, initial-scale=1.0" />
  <title>Home</title>

  <!--swipper  css link-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!--font awesome cdn-->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

  <!--custom css file-->
  <link rel="stylesheet" href="css/style.css" />

  
</head>

<body>

  <!--header section start-->
  <section class="header">
    <a href="home.php" class="logo">GLOBETREK TRAVELS</a>
    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>


  <!--header section end-->
  <div class="heading" style="background: url(images/book.jpg) no-repeat;">
    <h1>Book Now</h1>
  </div>

  <section class="booking">
    <h1 class="heading-title">Book Your Trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
        <div class="inputBox">
          <span>Name:</span>
          <input type="text" placeholder="Enter your name" name="name" />
        </div>
        <div class="inputBox">
          <span>Email:</span>
          <input type="text" placeholder="Enter your Email" name="email" />
        </div>

        <div class="inputBox">
          <span>Phone:</span>
          <input type="text" placeholder="Enter your number" name="phone" />
        </div>


        <div class="inputBox">
          <span>Address:</span>
          <input type="text" placeholder="Enter your Address" name="address" />
        </div>

        <div class="inputBox">
          <span>Where To:</span>
          <input type="text" placeholder="Place you want to visit" name="location" />
        </div>

        <div class="inputBox">
          <span>How Many:</span>
          <input type="number" placeholder="Number of guets" name="guests" />
        </div>

        <div class="inputBox">
          <span>Arrivals:</span>
          <input type="date" placeholder="Enter your name" name="arrivals />
        </div>

        <div class = "inputBox">
          <span>Leaving:</span>
          <input type="date" placeholder="Enter your name" name="leaving" />
        </div>
        
      </div>
      <input type="submit" value="submit" class="btn" name="send">

    </form>

  </section>




















  <!--footer section start-->

  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>Quick Links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
        <a href="packeage.php"><i class="fas fa-angle-right"></i>Package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>

      </div>
      <div class="box">
        <h3>Extra Links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
        <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
      </div>
      <div class="box">
        <h3>Contact Info</h3>
        <a href="#"><i class="fas fa-phone"></i>+94 714 870 168</a>
        <a href="#"><i class="fas fa-phone"></i>+0112 7540613</a>
        <a href="#"><i class="fas fa-envelope"></i>Tharaka@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Sri Lanka </a>
      </div>

      <div class="box">
        <h3>Follow Us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>Instergram</a>
        <a href="#"><i class="fab fa-linkedin"></i>Linkdin</a>
      </div>
    </div>

    <div class="credit">Created By <span>Tharaka Sandaruwan</span> | All Rights Reserved</div>
  </section>


  <!--footer section end-->



















  <!--swiper js file-->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!--custom js file-->
  <script src="js/script.js"></script>
</body>

</html>