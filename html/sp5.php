<?php
    $conn = mysqli_connect('localhost', 'root', '', 'test');
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page</title>
    <link rel="stylesheet" href="../css/sp.css" />

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
            <div class="card-wrapper">
                <div class="card">
                    <!-- card left -->
                    <div class="test">
                        <div class="product-imgs">
                            <div class="img-display">
                                <div class="img-showcase">
                                    <img src="../images/p5/2.jpg">
                                    <img src="../images/p5/3.jpg" alt="shoe image">
                                    <img src="../images/p5/1.jpg" alt="shoe image">
                                    <img src="https://cdn.toesmith.com/toesmith/product-images/7wqCC9VPFF6AXS9LAtq7aJ/LostAstro_osmDIm5SSg.jpg?tr=n-crop_product_new"
                                        alt="shoe image">
                                </div>
                            </div>
                            <div class="img-select">
                                <div class="img-item">
                                    <a href="#" data-id="1">
                                        <img src="../images/p5/2.jpg"
                                            alt="shoe image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="2">
                                        <img src="../images/p5/3.jpg"
                                            alt="shoe image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="3">
                                        <img src="../images/p5/1.jpg"
                                            alt="shoe image">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <script src="../js/sp.js"></script>
                    </div>
                    <!-- card right -->
                    <div class="product-content">
                        <h2 class="product-title">Cool Crystal</h2>
                        <div class="product-detail">
                            <ul>
                                <li>Price: <span>$249.00</span></li>
                                <li>Available: <span>in stock</span></li>
                                <li>Category: <span>Slip-on Sneakers</span></li>
                                <li>Shipping Area: <span>All over the world</span></li>
                                <li>Shipping Fee: <span>Free</span></li>
                            </ul>
                        </div>
                        <div class="opt">
                            <div class="label">
                                <label id="label_size">SIZE :</label>
                            </div>
                            <form method='post'>
                            <div class="selector">
                                <select name='size' id="format" required>
                                    <option selected disabled value="">Choose Size</option>
                                    <option class="opti" value="6">6 UK</option>
                                    <option class="opti" value="6.5">6.5 UK</option>
                                    <option class="opti" value="7">7 UK</option>
                                    <option class="opti" value="7.5">7.5 UK</option>
                                </select>
                            </div>
                            <div class="purchase-info">
                                <button name='atc' class="btn">
                                    Add to Cart <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                            </form>

                            <?php
                                $size = $_POST['size'];
                                $conn -> query("INSERT INTO `cart` (`pid`, `size`) VALUES ('p5', '$size')");
                                echo "<script>location.href = 'http://localhost/dbms/html/cart.php';</script>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
