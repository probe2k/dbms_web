<?php
	$conn = mysqli_connect('localhost', 'root', '', 'test');
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=../css/styles.css />
    <script src="https://kit.fontawesome.com/e90d22fc03.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
    </style>
</head>

<body>
    <div class="header">
        <div class="container">
            <!-- Navigation -->
            <div class="navbar">

                <div cbrowsecollectionlass="logo">
                    <img class="logo-img" src="../images/logo.png" alt="">
                </div>
                <!-- <div class-"logo">
          <img src="../images" width=""-->
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
                        <li><form method='post' action='search.php'><input type="text" name="search" placeholder="Search..">
                        <input id="submit" name='search_sub' type="submit" value=""></form>
                    </ul>
                </nav>
            </div>
            <script>
                document.getElementById('submit').style.display() = "none";
            </script>
            <!-- Slide Show or animated image-->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img src="../images/carousel/1.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="../images/carousel/2.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="../images/carousel/3.png" style="width:100%">
                </div>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                // Next/previous controls
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                // Thumbnail image controls
                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    if (n > slides.length) { slideIndex = 1 }
                    if (n < 1) { slideIndex = slides.length }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                }
            </script>

            <div class="c1">
                <h2>DESIGNED FOR COMFORT</h2>
                <img src="../images/Capture.JPG" width="70%" -->
            </div>

            <div class="bestseller">
                OUR BEST SELLERS
                <hr>
            </div>


            <section class="product_list">
                <div class="grid">
                    <div class="card">
                        <div class="image"><img src="../images/p4/1.jpg">
                        </div>
                        <div class="title">Yellow Mush</div>
                        <div class="price">$ 109.99</div>
                        <div class="add_to_cart">
                            <button class="add_to_cart_button" onclick="window.location.href='../html/sp4.php'">
                                <span class="add_to_cart_button_text">
                                    <span>Buy Now</span>
                                    <span>🛒</span>
                                </span>
                            </button>
                            <form method='post'> <button id='he1' name='sp1' class="heart_button"><i class="fas fa-heart"></i></button> </form>
              <?php 
                if (isset($_POST['sp1'])) {
                  $conn -> query("INSERT INTO `favorites` (`pid`) VALUES ('p4')");
                  echo "
                    <script>
                      document.getElementById('he1').style.color = \"red\";
                    </script>
                  ";
                }
              ?>
                        </div>
                    </div>

                    <div class="card">
                        <div class="image"><img src="../images/p1/1.jpg">
                        </div>
                        <div class="title">Art Tart</div>
                        <div class="price">$ 99.99</div>
                        <div class="add_to_cart">
                            <button class="add_to_cart_button" onclick="window.location.href='../html/sp1.php'">
                                <span class="add_to_cart_button_text">
                                    <span>Buy Now</span>
                                    <span>🛒</span>
                                </span>
                            </button>
                            <form method='post'> <button id='he2' name='sp2' class="heart_button"><i class="fas fa-heart"></i></button> </form>
              <?php 
                if (isset($_POST['sp2'])) {
                  $conn -> query("INSERT INTO `favorites` (`pid`) VALUES ('p1')");
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
                            <form method='post'> <button id='he3' name='sp3' class="heart_button"><i class="fas fa-heart"></i></button> </form>
              <?php 
                if (isset($_POST['sp3'])) {
                  $conn -> query("INSERT INTO `favorites` (`pid`) VALUES ('p2')");
                  echo "
                    <script>
                      document.getElementById('he3').style.color = \"red\";
                    </script>
                  ";
                }
              ?>
                        </div>
                    </div>

                    <div class="card">
                        <div class="image"><img src="../images/p8/1.jpg">
                        </div>
                        <div class="title">Retro Black</div>
                        <div class="price">$ 179.99</div>
                        <div class="add_to_cart">
                            <button class="add_to_cart_button" onclick="window.location.href='../html/sp8.php'">
                                <span class="add_to_cart_button_text">
                                    <span>Buy Now</span>
                                    <span>🛒</span>
                                </span>
                            </button>
                            <form method='post'> <button id='he4' name='sp4' class="heart_button"><i class="fas fa-heart"></i></button> </form>
                            <?php 
                                if (isset($_POST['sp4'])) {
                                    $conn -> query("INSERT INTO `favorites` (`pid`) VALUES ('p8')");
                                    echo "
                                    <script>
                                        document.getElementById('he4').style.color = \"red\";
                                    </script>
                                  ";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>


            <div class="footer">
                <div class="workspace">
                    <div class="container">

                        <p>
                        <h3>FOLLOW US</h3>
                        </p>
                        <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                    </div>

                    <div class="container2">
                        <p>
                        <h3>CUSTOMER SERVICE</h3>
                        </p>
                        <ul><a href="contact.php">Contact us</a></ul>
                        <ul><a href="profile.php">Order status</a></ul>
                    </div>
                </div>
                <div class="bottom">
                    <hr>
                    <p class="bottom_text">©2022 ShoeBiz Inc. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
