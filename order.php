<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width= <div class=" w3-container w3-padding-64" id="contact">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="order.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  </style>
</head>

<body>
  <div class="top">



    <div class="w3-top">
      <div class="dropdown">
        <button class="dropbtn"><i class="fa fa-bars" style="color: rgb(10, 10, 10);"></i></button>
        <div class="dropdown-content">

          <a href="index.php" class="w3-bar-item w3-button  " style="color:black"><i class="fa fa-home"></i>HOME</a>
          <a href="about.php" class="w3-bar-item w3-button " style="color:black"><i class="fa fa-user"></i>ABOUT</a>
          <a href="menu.php" class="w3-bar-item w3-button  " style="color: black"><i class="fa fa-th"></i>MENU</a>
          <a href="order.php" class="w3-bar-item w3-button  " style="color:goldenrod"><i class="fa fa-envelope"></i>RSVN</a>
        </div>
      </div>

      <a href="index.php" class="w3-bar-item w3-button w3-hide-small" style="color:white"><i class="fa fa-home"></i>HOME</a>
      <a href="about.php" class="w3-bar-item w3-button w3-hide-small" style="color:white"><i class="fa fa-user"></i>ABOUT</a>
      <a href="menu.php" class="w3-bar-item w3-button  w3-hide-small" style="color: white;""><i class=" fa fa-th"></i>MENU</a>
      <a href="order.php" class="w3-bar-item w3-button  w3-hide-small" style="color:goldenrod"><i class="fa fa-envelope"></i>RSVN</a>

    </div>
  </div>
  <br><br><br><br>


  <form class="tableR" method="POST" action="orderMeal.php">

    <br>
    <p><input class="w3-input w3-padding-50 size" type="text" placeholder="Your name" required name="name"></p>
    <p><input class="w3-input w3-padding-50 size" type="number" placeholder="How many people" required name="nbOfPeople"></p>
    <p><input class="w3-input w3-padding-50 size" type="tel" class="form-style" placeholder="12-345-678" pattern="[0-9]{2}[0-9]{3}[0-9]{3}" name="phone" required></p>
    <p><input id="demo1" class="w3-input w3-padding-16 size" onclick="getLocation()" placeholder="Your location" required name="location" type="text"></p>
    <p><input class="w3-input w3-padding-16 size" type="text" placeholder="Message \ Special requirements" required name="message"></p>
    <div>
      <button class="w3-button w3-white w3-section size" onclick="myFunction()" type="submit">SEND MESSAGE</button>
      <h3 id="demo" style="text-align: right;"></h3>
      <div id="myProgress">
        <div id="myBar"> </div>

      </div>
    </div>
    <br>
  </form>

  <script>
    var x = document.getElementById("demo1");

    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }

    function showPosition(position) {
      x.value = position.coords.latitude+" " + position.coords.longitude;
    }
  </script>
  <script>
    function myFunction() {
      let text = "confirm oder";
      if (confirm(text) == true) {

        const element = document.getElementById("myBar");
        let width = 0;
        const id = setInterval(frame, 40);

        function frame() {
          if (width == 100) {
            clearInterval(id);

          } else {

            width++;

            element.style.width = width + '%';
          }
        }

        text = "<span style='color: white ;     font-family:papyrus; border-radius: 12px;'><b>&nbsp Well Done&nbsp  </b></span>";

      } else {
        text = "<span style='color: white ;     font-family:papyrus; border-radius: 12px;'><b>&nbsp Reseravtion canceled &nbsp  </b></span>";

      }
      document.getElementById("demo").innerHTML = text;
    }
  </script>





</body>

</html>