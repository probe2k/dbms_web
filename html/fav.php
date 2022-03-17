<?php
	$conn = mysqli_connect('localhost', 'root', '', 'test');
?>

<head>
	<script src="https://kit.fontawesome.com/e90d22fc03.js" crossorigin="anonymous"></script>
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
	</style>
	<link rel='stylesheet' href='../css/fav.css' />
	<title>Favorites</title>
</head>

<body>
	<div class="header">
	<div class='container'>
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
                    </ul>
                </nav>
            </div>

		<div class='favorites'>
			Favorites
			<hr>
		</div>
        <div class="abc">
		<?php
			$res = $conn -> query("SELECT * FROM product p, favorites f WHERE f.pid = p.pid");
			if (mysqli_num_rows($res) > 0) {
				while ($row = $res -> fetch_array(MYSQLI_NUM)) {
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
                                    <form method='post'><button name='close_btn' class=\"close_btn\">
											<i class=\"fa fa-close\"></i>
										</button></form>
									</div>
									<div class=\"buy_now\">
										<a href=\"./s$row[0].php\"><button class=\"buy_btn\">Buy Now 🛒</button></a>
									</div>
								</div>
							</div>
						</div>
					";
                    if (isset($_POST['close_btn'])) {
                        $conn -> query("DELETE FROM favorites WHERE pid=$row[0]");
                    }
				}
			}
		?>
        </div>
	</div>
	</div>
</body>
