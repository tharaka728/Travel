<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <meta name="viewport" content="width=device=width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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

  <!--Home section start-->
  <section class="swiper home">
    <div class="home-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background: url(images/home-slide1.jpg),no-repeat ;
        ">
          <div class="content">
            <span>explorer,discover,travel</span>
            <h3>Travel around the world</h3>
            <a href="package.php" class="btn">Discover More</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background: url(images/img-10.jpg)no-repeat;">
          <div class="content">
            <span>explorer,discover,travel</span>
            <h3>Discover the new places</h3>
            <a href="package.php" class="btn">Discover More</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background: url(images/home-slide3.jpg)no-repeat;">
          <div class="content">
            <span>explorer,discover,travel</span>
            <h3>Make your Tour Worthwhile</h3>
            <a href="package.php" class="btn">Discover More</a>
          </div>
        </div>


      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>
  </section>




  <!--Home section End-->




  <!--service section start-->
  <section class="services">
    <h1 class="heading-title">Our Services</h1>
    <div class="box-container">
      <div class="box  col-4d"  data-aos="zoom-in">
        <img src="images/adventure.png" />
        <h3>Adventure</h3>
      </div>
      <div class="box col-4d"  data-aos="zoom-in">
        <img src="images/guide-book.png" />
        <h3>Tour Guide</h3>
      </div>
      <div class="box col-4d" data-aos="zoom-in"data-aos-duration="1000">
        <img src="images/trakking.png" />
        <h3>Traking</h3>
      </div>
      <div class="box col-4d" data-aos="zoom-in"data-aos-duration="1000">
        <img src="images/fire.png" />
        <h3>Camp Fire</h3>
      </div>
      <div class="box col-4d" data-aos="zoom-in"data-aos-duration="1000">
        <img src="images/offroad.png" />
        <h3>Off Road</h3>
      </div>
      <div class="box col-4d" data-aos="zoom-in"data-aos-duration="1000">
        <img src="images/camping.png" />
        <h3>Camping</h3>
      </div>

    </div>
  </section>

  <!--service section end-->

  <!--Home about section starts-->
  <section class="home-about">
    <div class="image">
      <img src="images/about-img-.jpg" data-aos="fade-right"   data-aos-duration="2000"   />
    </div>
    <div class="content">
      <h3>About Us</h3>
      <P>reating unforgettable & unique travel experiences!
At Travelco Holidays we’re passionate about travel. We believe in more surprising, extraordinary, and rewarding travel experiences. From a short flight to a magnificent cruise or a dream vacation, whatever it is, we help our clients to find perfect harmony in creating a journey of a lifetime.

Incorporated in the year of 2015, we have been providing travel solutions to enthusiastic travelers from Sri Lanka to worldwide destinations.<br style="margin-top: 20px;"/> Our team of trip experts will help you to get the best deal for your dream vacation, complex business trips or a good deal on a random flight.

We bring worldly knowledge and exceptional travel advice to the table for all of our customers and clients, whether you want to spend a week in Malaysia, Europe or Singapore! We’ve got you covered.</P>
      <a href="about.php" class="btn">Read More</a>
    </div>
  </section>


  <!--Home about section end-->

  <!--Home packages section start-->
  <section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>
    <div class="box-container">

      <div class="box " data-aos="fade-right" data-aos-duration="1000">
        <div class="image">
          <img src="images/SINGAPORE.jpg" />
        </div>
        <div class="content">
          <h3>Singapore</h3>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
          <a href="book.php" class="btn">Book Now</a>
        </div>
      </div>

      <div class="box" data-aos="fade-up" data-aos-duration="1000">
        <div class="image">
          <img src="images/thailand2.jpg" />
        </div>
        <div class="content">
          <h3>Thailand</h3>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
          <a href="book.php" class="btn">Book Now</a>
        </div>
      </div>

      <div class="box" data-aos="fade-left" data-aos-duration="1000">
        <div class="image">
          <img src="images/aus.webp" />
        </div>
        <div class="content">
          <h3>Australia</h3>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
          <a href="book.php" class="btn">Book Now</a>
        </div>
      </div>

      
    </div>

    <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
  </section>

  <!--Home packages section end-->

    <!--Home offer section start-->
    <section class="home-offer">
      <div class="content">
          <!--
        <h3>Upto 50% Off</h3>
        <P>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</P>
     <a href="book.php" class="btn">Book Now</a>-->
     <img src="images/Middle-Banner.jpg"/>
      </div>
    </section>


    <!--Home offer section end-->













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



  <!--footer section start-->


  <!--footer section end-->



















  <!--swiper js file-->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!--custom js file-->
  <script src="js/script.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>

</html>