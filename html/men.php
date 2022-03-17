<?php
	$conn = mysqli_connect('localhost', 'root', '', 'test');
	$query = $conn -> query("SELECT * FROM `product`");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://kit.fontawesome.com/e90d22fc03.js" crossorigin="anonymous"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/mw.css" />
  <title>Document</title>
</head>

<body>
  <div class="header">
    <div class="container">
      <!-- Navigation -->
      <div class="navbar">

        <div class="logo">
          <img class="logo-img" src="../images/logo.png" alt="">
        </div>
        <!-- <div class-"logo">
              <img src="images" width=""-->
        <nav>
          <ul>
          <li><a href="../html/new_arr.php">New Arrivals</a></li>
            <li><a href="../html/men.php">Men</a></li>
            <li><a href="../html/women.php">Women</a></li>
            <li><a href="../html/browsecollection.php">Browse Collections</a></li>
            <li><a href="../html/profile.php"><i class="far fa-user"></i></a>
            <li>
            <li><a href="../html/fav.php"><i class="far fa-heart"></i></a>
            <li>
            <li><a href="../html/cart.php"><i class="fas fa-shopping-cart"></i></a>
            <li>
            <li><form method='post' action='search.php'><input type="text" name="search" placeholder="Search..">
                        <input id="submit" name='search_sub' type="submit" value=""></form>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <div class="c1">
    <div class="tab">
      <p class="filters">FILTERS</p>
      <hr>
      <p class="collections">Collections</p>
      <div class="xyz">
        <button class="tablinks" onmouseover="openCity(event, 'High-Ankled')">High-Ankled </button>
        <button class="tablinks" onmouseover="openCity(event, 'Lace-on')">Lace-On </button>
        <button class="tablinks" onmouseover="openCity(event, 'Slip-on')">Slip-On </button>
      </div>
    </div>
    <section class="product_list">
      <div id="High-Ankled" class="tabcontent">
        <div class="grid">
          <div class="card">
            <div class="image"><img src="../images/p2/1.jpg">
            </div>
            <div class="title">Molten Lava</div>
            <div class="price">$ 199.99</div>
            <div class="add_to_cart">
              <button class="add_to_cart_button" onclick="window.location.href='../html/sp2.php'">
                <span class="add_to_cart_button_text">
                  <span>Buy Now</span>
                  <span>🛒</span>
                </span>
              </button>
              <form method='post'> <button id='he2' name='sp2' class="heart_button"><i class="fas fa-heart"></i></button> </form>
              <?php 
                if (isset($_POST['sp2'])) {
                  $conn -> query("INSERT INTO `favorites` (`pid`) VALUES ('p2')");
                  echo "
                    <script>
                      document.getElementById('he2').style.color = \"red\";
                    </script>
                  ";
                }
              ?>
            </div>
          </div>
          <div class="card">
            <div class="image"><img src="../images/p3/1.jpg">
            </div>
            <div class="title">Camouflage</div>
            <div class="price">$ 149.99</div>
            <div class="add_to_cart">
              <button class="add_to_cart_button" onclick="window.location.href='../html/sp3.php'">
                <span class="add_to_cart_button_text">
                  <span>Buy Now</span>
                  <span>🛒</span>
                </span>
              </button>
              <form method='post'> <button id='he3' name='sp3' class="heart_button"><i class="fas fa-heart"></i></button> </form>
              <?php 
                if (isset($_POST['sp3'])) {
                  $conn -> query("INSERT INTO `favorites` (`pid`) VALUES ('p3')");
                  echo "
                    <script>
                      document.getElementById('he3').style.color = \"red\";
                    </script>
                  ";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div id="Slip-on" class="tabcontent">
        <div class="grid">
          <div class="card">
            <div class="image"><img src="../images/p5/1.jpg">
            </div>
            <div class="title">Cool Crystal</div>
            <div class="price">$ 249.99</div>
            <div class="add_to_cart">
              <button class="add_to_cart_button" onclick="window.location.href='../html/sp5.php'">
                <span class="add_to_cart_button_text">
                  <span>Buy Now</span>
                  <span>🛒</span>
                </span>
              </button>
              <form method='post'> <button id='he5' name='sp5' class="heart_button"><i class="fas fa-heart"></i></button> </form>
              <?php 
                if (isset($_POST['sp5'])) {
                  $conn -> query("INSERT INTO `favorites` (`pid`) VALUES ('p5')");
                  echo "
                    <script>
                      document.getElementById('he5').style.color = \"red\";
                    </script>
                  ";
                }
              ?>
            </div>
          </div>
          <div class="card">
            <div class="image"><img src="../images/p6/1.jpg">
            </div>
            <div class="title">Jet Black</div>
            <div class="price">$ 169.99</div>
            <div class="add_to_cart">
              <button class="add_to_cart_button" onclick="window.location.href='../html/sp6.php'">
                <span class="add_to_cart_button_text">
                  <span>Buy Now</span>
                  <span>🛒</span>
                </span>
              </button>
              <form method='post'> <button id='he6' name='sp6' class="heart_button"><i class="fas fa-heart"></i></button> </form>
              <?php 
                if (isset($_POST['sp6'])) {
                  $conn -> query("INSERT INTO `favorites` (`pid`) VALUES ('p6')");
                  echo "
                    <script>
                      document.getElementById('he6').style.color = \"red\";
                    </script>
                  ";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div id="Lace-on" class="tabcontent">
        <div class="grid">
          <div class="card">
            <div class="image"><img src="../images/p9/1.jpg">
            </div>
            <div class="title">Blackpers</div>
            <div class="price">$ 99.99</div>
            <div class="add_to_cart">
              <button class="add_to_cart_button" onclick="window.location.href='../html/sp9.php'">
                <span class="add_to_cart_button_text">
                  <span>Buy Now</span>
                  <span>🛒</span>
                </span>
              </button>
              <form method='post'> <button id='he9' name='sp9' class="heart_button"><i class="fas fa-heart"></i></button> </form>
              <?php 
                if (isset($_POST['sp9'])) {
                  $conn -> query("INSERT INTO `favorites` (`pid`) VALUES ('p9')");
                  echo "
                    <script>
                      document.getElementById('he9').style.color = \"red\";
                    </script>
                  ";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      
  </div>
  </section>
  </div>
  <script src="../js/mw.js"></script>
</body>

</html>
