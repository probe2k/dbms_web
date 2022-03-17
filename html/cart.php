<?php
    $conn = mysqli_connect('localhost', 'root', '', 'test');
    $sum = 0;
    $api_key = "rzp_live_xZUfNq1G236Zaj";
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/cart.css" />
    <script src="https://kit.fontawesome.com/e90d22fc03.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
    </style>
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="container">
                <!-- Navigation -->
                <div class="navbar">
                    <!-- <div class-"logo">
          <img src="images" width=""-->

                    <div class="logo">
                        <img class="logo-img" src="../images/logo.png" alt="">
                    </div>
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
                        </ul>
                    </nav>
                </div>

                <div class="cart_i">
                    Cart Items
                    <hr>
                </div>
                <div class="abc">
				<?php
					$query = $conn -> query("SELECT * FROM `product` p, `cart` c WHERE c.pid = p.pid");
					if (mysqli_num_rows($query) > 0) {
						while ($row = $query -> fetch_array(MYSQLI_NUM)) {
                            $sum += $row[2];
                            echo "
                                <div class=\"row\">
                                    <div class=\"column1\">
                                        <img src=$row[4] class=\"featured-image-1\" alt=\"\">
                                    </div>
                                    <div class=\"xyz\">
                                    <div class=\"column2\">
                                        <li>
                                            <h2>$row[1]</h2>
                                        </li>
                                        <li>Price: $ $row[2]</li>
                                    </div>
                                    <div class=\"column3\">
                                        <div class=\"close\">
                                            <form method='post'><button name='close_btn' class=\"close_btn\"><i class=\"fa fa-close\"></i></button></form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            ";
                            if (isset($_POST['close_btn'])) {
                                $conn -> query("DELETE FROM cart WHERE pid=$row[0]");
                            }
                        }
					} else {
                        echo "<center><img height='500' src='../images/empty_cart.png'></center>";
                    }
				?>
                </div>

                <div class="deets">
                    <div class="footer">
                        <!-- <div class="workspace">-->
                        <div class="c1">
                            <!--<form action="/action_page.php">-->
                            <form method='post'>
                            <input style=height:41px;font-size:12pt; input type="text" placeholder="Your Address"
                                name='address' required />
                            <div class="b">
                                <a href="#"><button name='addr' type='submit' class="buy_btn">Submit</button></a>
                            </div>
                            </form>
                            <?php
                                $adr = $_POST['address'];
                                if (isset($_POST['addr'])) {
                                    $conn -> query("INSERT INTO `cart` (`address`) VALUES ('$adr')");
                                }
                            ?>

                        </div>

                        <div class="c2">

                            <li> Total Price: $ <?php echo $sum; ?> </li>
                            <div class="t"><a href=""><form method='post'><button name='checkout' class="button1">Checkout</button></form></a></div>

                            <?php
                                if (isset($_POST['checkout'])) {
                                    echo "
                                    <form action=\"https://www.example.com/payment/success/\" method=\"POST\">
                                        <script
                                            src=\"https://checkout.razorpay.com/v1/checkout.js\"
                                            data-key=<?php echo $api_key; ?> // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
                                            data-amount=<?php echo $sum; ?> // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
                                            data-currency=\"USD\"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
                                            data-order_id=\"order_CgmcjRh9ti2lP7\"// Replace with the order_id generated by you in the backend.
                                            data-buttontext=\"Pay NOW\"
                                            data-name=\"ShoeBiz\"
                                            data-description=\"RAND\"
                                            data-image=\"https://example.com/your_logo.jpg\"
                                            data-prefill.name=\"\"
                                            data-prefill.email=\"\"
                                            data-theme.color=\"#F37254\"
                                        ></script>
                                        <input type=\"hidden\" custom=\"Hidden Element\" name=\"hidden\">
                                        </form>
                                    ";
                                    $cart_data = $conn -> query("SELECT * FROM `cart` WHERE `pid` IS NOT NULL");
                                    if (mysqli_num_rows($cart_data) > 0) {
                                        while ($row = $cart_data -> fetch_array(MYSQLI_NUM)) {
                                            $conn -> query("INSERT INTO `orders` (`pid`) VALUES ('$row[0]')");
                                        }
                                        $conn -> query("DELETE FROM `cart` WHERE `pid` IS NOT NULL");
                                    }
                                    echo "<script>location.href = 'http://localhost/dbms/html/profile.php';</script>";
                                }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</body>

</html>

<!-- $key_id="rzp_test_Udd46mctljFxXy"; -->
                                    <!-- $secret_id="gQEp9EOXHsbDO24guVnBuKvq"; -->