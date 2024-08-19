<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="15.jpg" type="image/x-icon">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="menu.css">


</head>

<body>


  <div class="top">



    <div class="w3-top">
      <div class="dropdown">
        <button class="dropbtn"><i class="fa fa-bars" style="color: rgb(10, 10, 10);"></i></button>
        <div class="dropdown-content">

          <a href="index.php" class="w3-bar-item w3-button" style="color:white"><i class="fa fa-home"></i>HOME</a>
          <a href="about.php" class="w3-bar-item w3-button" style="color:white"><i class="fa fa-user"></i>ABOUT</a>
          <a href="menu.php" class="w3-bar-item w3-button " style="color:goldenrod"><i class="fa fa-th"></i>MENU</a>
          <a href="order.php" class="w3-bar-item w3-button " style="color:white"><i class="fa fa-envelope"></i>RSVN</a>
        </div>
      </div>

      <a href="index.php" class="w3-bar-item w3-button w3-hide-small" style="color:white"><i class="fa fa-home"></i>HOME</a>
      <a href="about.php" class="w3-bar-item w3-button w3-hide-small" style="color:white"><i class="fa fa-user"></i>ABOUT</a>
      <a href="menu.php" class="w3-bar-item w3-button  w3-hide-small" style="color: goldenrod;""><i class=" fa fa-th"></i>MENU</a>
      <a href="order.php" class="w3-bar-item w3-button  w3-hide-small" style="color:rgb(251, 251, 250)"><i class="fa fa-envelope"></i>RSVN</a>

    </div>
  </div>
  <!-- button -->
  <div class="center">
    <a name="goback"></a>
    <img class="img" src="logo 4.jpg" style="margin-right: 90%; margin-top: 2%;" width="20%">
    <h1 class="menu1"> Menu</h1>
    <button class="button button4"><a onclick="scrollIntoBurgers()"><b>Burgers</b></a></button>
    <button class="button button4"><a onclick="scrollIntoSalads()"><b>Salads</b></a></button>
    <button class="button button4"><a onclick="scrollIntoDesserts()"><b>Desserts</b></a></button>
    <button class="button button4"><a onclick="scrollIntoDrinks()"><b>Drinks</b></a></button>
  </div>



  <div class="w3-content w3-section large" style="max-width:250px;">
    <img class="mySlides" src="slide1.jpg" width="100%" height="90%" style="width:120%;border-radius: 15px;height: 100%;">
    <img class="mySlides" src="slide2.jpg" width="100%" height="90%" style="width:120%;border-radius: 15px;height: 100%;">
    <img class="mySlides" src="slide3.jpg" width="100%" height="90%" style="width:120%;border-radius: 15px;height: 100%;">
    <img class="mySlides" src="slide4.jpg" width="100%" height="90%" style="width:120%;border-radius: 15px;height: 100%;">
    <img class="mySlides" src="slide5.jpg" width="100%" height="90%" style="width:120%;border-radius: 15px;height: 100%;">
    <img class="mySlides" src="slide6.jpg" width="100%" height="90%" style="width:131%;border-radius: 15px;height: 100%;">
    <img class="mySlides" src="slide7.jpg" width="100%" height="90%" style="width:124%;border-radius: 15px;height: 100%;">
    <img class="mySlides" src="slide8.jpg" width="100%" height="90%" style="width:122%;border-radius: 15px;height: 100%;">
    <img class="mySlides" src="slide9.jpg" width="100%" height="90%" style="width:120%;border-radius: 15px;height: 100%;">
    <img class="mySlides" src="cold 2.jpg" width="100%" height="90%" style="width:124%;border-radius: 15px;height: 100%;">
    <img class="mySlides" src="cold1.jpg" width="100%" height="90%" style="width:122%;border-radius: 15px;height: 100%;">
    <img class="mySlides" src="hot1.jpg" width="100%" height="90%" style="width:120%;border-radius: 15px;height: 100%;">
    <div style="text-align:center;margin-left: 20%;display: block;">
      <br>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>

    </div>
  </div>


  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 1000); // Change image every 2 seconds
    }
  </script>

  <!-- Burgers -->
  <div id="Burgers" class="w3-content ">

    <a name="Burgers" id="Burgers"></a>
    <!-- Menu -->
    <div id="menu" class="w3-padding-top-64">
      <h1><b>Burgers</b></h1>
      <div class="w3-row">

        <div class="w3-col l6 m6 w3-padding-large">


          <h4><b>Black Burger Buns </b></h4>
          <p class="w3-text-grey">
            It’s all about the black buns, these buns color made the whole burger special with the smoky meat, tomatoes,
            lettuce and onions.</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:15.99$</p><br>

          <h4><b>Chili Burger With Pepper Relish</b></h4>
          <p class="w3-text-grey">
            This scrumptious burger sits under a chilli lamb pattie, roasted bell pepper dip, onions, tomatoes and
            lettuce. </p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:17.99$</p><br>

          <h4><b>Lamb Stay Burger</b></h4>
          <p class="w3-text-grey">
            Succulent lamb burgers with the crunchiness of cashew nuts and the creaminess of peanut butter smothered
            with a gorgeous satay sauce.</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:21.99$</p><br>

          <h4><b>Chicken and Fish Burger</b></h4>
          <p class="w3-text-grey">
            Experience the goodness of chicken, fish and a tangy hot and sour sauce. </p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:20.99$</p><br>

          <h4><b>Chicken Feta Cheese Burger</b></h4>
          <p class="w3-text-grey">
            Chicken mince marinated with salt, pepper and feta cheese is only the beginning of this ultimate wonder.
          </p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:16.99$</p><br>

          <h4><b>Lentil and Mushroom Burger</b></h4>
          <p class="w3-text-grey">
            A lentil, mushroom and sun-dried tomato pattie packed between a whole wheat bun.</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:17.99$</p><br>

          <h4><b>Butter Chicken Burger</b></h4>
          <p class="w3-text-grey">
            Made with chicken tikka coated in spicy, delicious makhani gravy filled inside a burger bun.</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:18.99$</p><br>

          <h4><b>Elk Burger </b></h4>
          <p class="w3-text-grey">
            From its name, the elk burger is made up of the distinctive elk meat in addition to tomatoes, lettuce,
            onions and cheese.</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:19.99$</p><br>
          <h4><b>Reindeer Burger With Lingonberry Jam </b></h4>
          <p class="w3-text-grey">
            is a traditional burger made with reindeer meat instead of beef and served with lingonberry jam as the main
            condiment, and
            served with toppings such as onion, mushrooms and gouda cheese. </p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:17.99$</p><br>

        </div>



        <div class="w3-col l6 m6 w3-padding-large image  w3-hide-small">
          <img src="b3.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>
        <div class="w3-col l6 m6 w3-padding-large  image  w3-hide-small">
          <img src="h2.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>

      </div>



    </div>
    <button class="button button4"><a onclick="scrolltop()"><b>Go back</b></a></button>
    <!-- End Content -->
  </div>


  <!-- salads -->
  <div id="salads" class="w3-content">
    <a name="Salads"></a>

    <div id="menu" class="w3-padding-top-64">
      <h1><b>Salads</b></h1>
      <div class="w3-row">

        <div class="w3-col l6 m6 w3-padding-large">

          <h4><b>Raspberries salad </b></h4>
          <p class="w3-text-grey">
            Salad with Goat Cheese, Avocado & Raspberries.</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:10.99$</p><br>

          <h4><b>Fruity winter salad</b></h4>
          <p class="w3-text-grey">
            Salad with avocado, apple , pomegranate arils, feta cheese crumbled, hazelnuts chopped with hazelnut mustard
            dressing. </p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:15.99$</p><br>

          <h4><b>Salad Caprese</b></h4>
          <p class="w3-text-grey">
            made of sliced fresh mozzarella, tomatoes, and sweet basil, seasoned with salt, and olive oi.</p><br>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:16.99$</p><br>

          <h4><b>Salad Niçoise</b></h4>
          <p class="w3-text-grey">
            made of tomatoes, hard-boiled eggs, Niçoise olives and anchovies or tuna, dressed with olive oil, or in some
            historical versions, a vinaigrette. </p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:13.99$</p><br>

          <h4><b>Cobb Salad</b></h4>
          <p class="w3-text-grey">
            typically made with chopped salad greens (authentically iceberg lettuce, watercress, endives, and romaine
            lettuce),
            tomato, beaf bacon, chicken breast, hard-boiled eggs, avocado, chives, and blue cheese. </p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:13.99$</p><br>

          <h4><b>Ceaser Salad</b></h4>
          <p class="w3-text-grey">
            a green salad of romaine lettuce and croutons dressed with lemon juice, olive oil, egg, Worcestershire
            sauce, anchovies, garlic, Dijon mustard, Parmesan cheese, and black pepper.</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:16.99$</p><br>

          <h4><b>Waldorf Salad</b></h4>
          <p class="w3-text-grey">
            made of celery, fresh apples, walnuts, and grapes, dressed in mayonnaise, and served on a bed of lettuce as
            an appetizer or a light meal.</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:15.99$</p><br>

          <h4><b>Olivier Salad </b></h4>
          <p class="w3-text-grey">
            made with diced boiled potatoes, carrots and brined dill pickles, together with optional vegetable such as
            green peas,
            eggs, celeriac, and onions, optional meat ingredients such as diced boiled chicken, bologna sausage, ham, or
            hot dogs,
            with salt, pepper and dressed with mayonnaise.</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:16.99$</p><br>
          <h4><b>Coleslaw </b></h4>
          <p class="w3-text-grey">
            It consists of shredded cabbage, mayonnaise, carrots, buttermilk or sour cream with vinegar, sugar, and
            other seasonings.</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:14.99$</p><br>

        </div>

        <div class="w3-col l6 m6 w3-padding-large w3-hide-small">
          <img src="slads.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>
        <div class="w3-col l6 m6 w3-padding-large w3-hide-small">
          <img src="slads2.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>

      </div>



    </div>

    <button class="button button4"><a onclick="scrolltop()"><b>Go back</b></a></button>
  </div>

  <!-- Desserts-->
  <div id="Desserts" class="w3-content">

    <a name="Desserts"></a>
    <!-- Menu -->
    <div id="menu" class="w3-padding-top-64">

      <div class="w3-row">
        <h1><b>Desserts</b></h1>
        <div class="w3-col l6 m6 w3-padding-large">

          <h4><b>Sticking Date Pudding</b></h4>
          <p class="w3-text-grey">
            moist sponge cake, made with finely chopped dates (optional), covered in a toffee sauce and often served
            with a vanilla custard or vanilla ice-cream</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:14.99$</p><br>
          <h4><b>Hummingbird Cake</b></h4>
          <p class="w3-text-grey">
            moist southern cake flavored with bananas, pineapple, and cinnamon and covered in a rich cream cheese
            frosting topped with toasted pecans</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:13.5$</p><br>
          <h4><b>American Brownies </b></h4>
          <p class="w3-text-grey">
            It’s simply a chocolate cake confection and frosting</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:9$</p><br>
          <h4><b>Belgian Waffles</b></h4>
          <p class="w3-text-grey">
            Belgian waffles have toppings vary from whipped cream, confectioners sugar, soft fruit, and chocolate
            spread, to syrup and butter or margarine</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:12.99$</p><br>
          <h4><b>Tiramisu </b></h4>
          <p class="w3-text-grey">
            is a coffee-flavoured Italian dessert made of ladyfingers (savoiardi) dipped in coffee, layered with a
            whipped mixture of eggs, sugar, and mascarpone cheese, flavoured with cocoa.</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:12.5$</p><br>
          <h4><b>Portuguese Tarts</b></h4>
          <p class="w3-text-grey">
            This Portuguese dessert recipe features a delicately spiced flavor and uses pantry ingredients like egg
            yolks, flour, and cinnamon to create a one-of-a-kind pastry.</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:11.99$</p><br>
          <h4><b>Pavlova </b></h4>
          <p class="w3-text-grey">
            Taking the form of a cake-like circular block of baked meringue, pavlova has a crisp crust and soft, light
            inside.The confection is topped with fruit and whipped cream</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:13$</p><br>
          <h4><b>Banoffee Pie </b></h4>
          <p class="w3-text-grey">
            made from bananas, whipped cream and a thick caramel sauce (made from boiled condensed milk, or dulce de
            leche), combined either on a buttery biscuit base or one made from crumbled biscuits and butter</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:12.99$</p><br>
        </div>

        <div class="w3-col l6 m6 w3-padding-large w3-hide-small">
          <img src="d1.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>
        <div class="w3-col l6 m6 w3-padding-large w3-hide-small">
          <img src="d2.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>

      </div>



    </div>

    <button class="button button4"><a onclick="scrolltop()"><b>Go back</b></a></button>
  </div>


  <!-- cold drinks -->
  <div id="colddrinks" class="w3-content">


    <a name="Drinks"></a>
    <!-- Menu -->
    <div id="menu" class="w3-padding-top-64">

      <div class="w3-row">
        <h2><b>Cold Drinks</b></h2>
        <div class="w3-col l6 m6 w3-padding-large">

          <h4><b>Blackberry Virgin Mojito</b></h4>
          <p class="w3-text-grey">
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:12.99$</p><br>

          <h4><b>Strawberry Lemonade</b></h4>

          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:12.99$</p><br>

          <h4><b>Triple Berry Sparklers</b></h4>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:12.99$</p><br>

          <h4><b>Virgin Raspberry Mango Margarita Slushies</b></h4>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:12.99$</p><br>
          <h4><b>Juneteenth Punch</b></h4>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:16.99$</p><br>

          <h4><b>Red Velvet Cheesecake Milkshake</b></h4>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:15.99$</p><br>

          <h4><b>Shirley Temples</b></h4>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:14.99$</p><br>
          <h4><b>Creamsicle Milkshakes</b></h4>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:13.99$</p><br>

          <h4><b>Mango Lassi</b></h4>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:12.99$</p><br>
          <h4><b>Soft Drinks </b></h4>
          <p class="w3-text-grey">
            Pepsi, 7up, Fanta and sprite</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:9.99$</p><br>
        </div>

        <div class="w3-col l6 m6 w3-padding-large w3-hide-small">
          <img src="cold1.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>

        <div class="w3-col l6 m6 w3-padding-large w3-hide-small">
          <img src="cold 2.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>
      </div>



    </div>

    <button class="button button4" style="font-family: papyrus;"><a onclick="scrolltop()"><b>Go back</b></a></button>
  </div>


  <!-- hot drinks -->
  <div id="home" class="w3-content">



    <!-- Menu -->
    <div id="menu" class="w3-padding-top-64 ">

      <div class="w3-row">
        <h2><b>Hot Drinks</b></h2>
        <div class="w3-col l6 m6 w3-padding-large">

          <h4><b>Hot Chocolate </b></h4>
          <p class="w3-text-grey">
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:4.99$</p><br>

          <h4><b>Matcha Latte</b></h4>

          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:5.99$</p><br>

          <h4><b>Caffe Mocha</b></h4>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:5.99$</p><br>

          <h4><b>Espresso </b></h4>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:6.99$</p><br>
          <h4><b>Juneteenth Punch</b></h4>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:7.99$</p><br>

          <h4><b>Vanilla Chai Latte</b></h4>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:5.99$</p><br>

          <h4><b>Hot Buttered Rum</b></h4>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:7.99$</p><br>
          <h4><b>Americano</b></h4>
          <p class="w3-text-grey">
            It’s simply a chocolate cake confection and frosting</p>
          <p style="color:  rgb(204, 151, 18); font-family: papyrus ;">price:5.99$</p><br>

        </div>

        <div class="w3-col l6 m6 w3-padding-large w3-hide-small">
          <img src="hot1.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>



      </div>

      <button class="button button4" style="font-family: papyrus;"><a onclick="scrolltop()"><b>Go back</b></a></button>
    </div>
  </div>
  <!-- Footer -->
  <footer class="w3-center w3-black">
    <a onclick="scrolltop()" class="w3-button w3-light-grey scrollUp" style="border-radius: 15px;"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <script>
      function scrolltop() {
        window.scroll({
          top: 0,
          left: 0,
          behavior: 'smooth'

        })
      }

      function scrollIntoDrinks() {

        const scrollintodrinks = document.getElementById('colddrinks');
        scrollintodrinks.scrollIntoView({
          behavior: 'smooth'
        });

      }

      function scrollIntoSalads() {

        const scrollIntoSalads = document.getElementById('salads');
        scrollIntoSalads.scrollIntoView({
          behavior: 'smooth'
        });

      }

      function scrollIntoBurgers() {

        const scrollIntoBurgers = document.getElementById('Burgers');
        scrollIntoBurgers.scrollIntoView({
          behavior: 'smooth'
        });

      }

      function scrollIntoDesserts() {

        const scrollIntoDesserts = document.getElementById('Desserts');
        scrollIntoDesserts.scrollIntoView({
          behavior: 'smooth'
        });

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