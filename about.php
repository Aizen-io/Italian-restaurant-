<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="15.jpg" type="image/x-icon">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="about.css">

  <title>Document</title>
</head>

<body>
  <div class="top">



    <div class="w3-top">
      <div class="dropdown">
        <button class="dropbtn"><i class="fa fa-bars" style="color: rgb(10, 10, 10);"></i></button>
        <div class="dropdown-content">
          <a href="index.php" class="w3-bar-item w3-button " style="color: rgb(10, 10, 10);"><i class="fa fa-home"></i>HOME</a>
          <a href="about.php" class="w3-bar-item w3-button " style="color:goldenrod"><i class="fa fa-user"></i>ABOUT</a>
          <a href="menu.php" class="w3-bar-item w3-button  " style="color: rgb(10, 10, 10);"><i class="fa fa-th"></i>MENU</a>
          <a href="order.php" class="w3-bar-item w3-button  " style="color: rgb(10, 10, 10);"><i class="fa fa-envelope"></i>RSVN</a>
        </div>
      </div>
      <a href="index.php" class="w3-bar-item w3-button w3-hide-small" style="color:white;"><i class="fa fa-home"></i>HOME</a>
      <a href="about.php" class="w3-bar-item w3-button w3-hide-small" style="color:goldenrod"><i class="fa fa-user"></i>ABOUT</a>
      <a href="menu.php" class="w3-bar-item w3-button  w3-hide-small" style="color:rgb(247, 245, 245);"><i class="fa fa-th"></i>MENU</a>
      <a href="order.php" class="w3-bar-item w3-button  w3-hide-small" style="color:rgb(238, 234, 234);"><i class="fa fa-envelope"></i>RSVN</a>

    </div>
  </div>
  <br><br><br>
  <h1 class="title"><b>Welcome to Clock Restaurant</b></h1>
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 7</div>
      <img src="deg.jpg" style="width:30% ; border-radius: 5%;">
      <img src="deg2.jpg" style="width:27%; border-radius: 5%;">
      <img src="deg3.jpg" style="width:30%; border-radius: 5%;">

    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 7</div>
      <img src="deg4.jpg" style="width:30%; border-radius: 5%;">
      <img src="deg5.jpg" style="width:30%; border-radius: 5%;">
      <img src="deg6.jpg" style="width:27%; border-radius: 5%;">

    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 7</div>
      <img src="deg7.jpg" style="width:34%; border-radius: 5%;">
      <img src="deg.jpg" style="width:27%; border-radius: 5%;">
      <img src="deg2.jpg" style="width:30%; border-radius: 5%;">

    </div>
    <div class="mySlides fade">
      <div class="numbertext">4 / 7</div>
      <img src="deg4.jpg" style="width:30%; border-radius: 5%;">
      <img src="deg6.jpg" style="width:30%; border-radius: 5%;">
      <img src="deg5.jpg" style="width:27%; border-radius: 5%;">

    </div>

    <div class="mySlides fade">
      <div class="numbertext">5 / 7</div>
      <img src="deg3.jpg" style="width:30%; border-radius: 5%;">
      <img src="deg2.jpg" style="width:27%; border-radius: 5%;">
      <img src="deg.jpg" style="width:30%; border-radius: 5%;">

    </div>

    <div class="mySlides fade">
      <div class="numbertext">6 / 7</div>
      <img src="deg7.jpg" style="width:31%; border-radius: 5%;">
      <img src="deg5.jpg" style="width:30%; border-radius: 5%;">
      <img src="deg3.jpg" style="width:27%; border-radius: 5%;">

    </div>
    <div class="mySlides fade">
      <div class="numbertext">7 / 7</div>
      <img src="deg4.jpg" style="width:33%; border-radius: 5%;">
      <img src="deg6.jpg" style="width:27%; border-radius: 5%;">
      <img src="deg5.jpg" style="width:30%; border-radius: 5%;">

    </div>

  </div>
  <br>

  <div style="text-align:center;margin-right: 7%;">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>
  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large">
      <img src="logo 4.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center" style="color:goldenrod ;font-family: papyrus;"><b>About Clock</b></h1><br>
      <h5 class="w3-center" style="color:goldenrod">Tradition since <span class="w3-tag w3-text-white white" style="background-color: goldenrod;opacity: 1;"> 1889</span></h5>
      <p class="w3-large" style="  color:white;">At <span style="color:goldenrod;font-family:papyrus ;">Clock
          Restaurant</span>, we invite you to embark on a culinary journey that transcends time. Step into our doors and
        experience a delightful fusion of delectable cuisine and the captivating world of clocks.</p>
      <p class="w3-large" style="  color:goldenrod;"><span class="w3-tag w3-text-white white" style="background-color: goldenrod;opacity: 1;"> We use only seasonal ingredients.</span> </p>
      <p class="w3-large w3-text-goldenrod " style="color:white">Indulge your taste buds with a menu meticulously
        crafted by our talented culinary team. Drawing inspiration from diverse cuisines, our dishes are prepared using
        the finest ingredients, ensuring a harmonious blend of flavors and textures. From appetizers that awaken the
        palate to mouthwatering main courses and decadent desserts, our offerings promise to satisfy even the most
        discerning food enthusiasts.</p>
    </div>
  </div>

  <footer class="w3-center w3-black">
    <a onclick="scrolltop()" class="w3-button w3-light-grey scrollUp"><i class="fa fa-arrow-up w3-margin-right"></i>To
      the top</a>
    <script>
      function scrolltop() {
        window.scroll({
          top: 0,
          left: 0,
          behavior: 'smooth'

        })
      }
    </script>

    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
      <p style="color: goldenrod;font-family: papyrus;">Clock-restaurant</p>
    </div>

  </footer>
</body>

</html>