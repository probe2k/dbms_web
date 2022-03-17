<?php
	$conn = mysqli_connect('localhost', 'root', '', 'test');
?>

<head>
	<script src="https://kit.fontawesome.com/e90d22fc03.js" crossorigin="anonymous"></script>
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
	</style>
	<link rel="stylesheet" href="../css/mw.css" />
	<title> Men </title>
</head>

<body>
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
			<div class='grid'>
				<?php
					$m_high = $conn -> query("SELECT * FROM `product` WHERE `gender` = 'M' AND type='High-ankle Sneakers'");
					if (mysqli_num_rows($m_high) > 0) {
						while ($row_d = $m_high -> fetch_array(MYSQLI_NUM)) {
							echo "						
								<div class='card'>
										<div class='image'><img src=$row_d[4]></div>
										<div class='title'>$row_d[1]</div>
										<div class='price'>$ $row_d[2]</div>
										<div class='add_to_cart'>
											<button class='add_to_cart_button' onclick='window.location.href='../html/sp1.php''>
											<span class='add_to_cart_button_text'>
												<span>Buy Now</span>
												<span>🛒</span>
											</span>
										</button>
										</div>
									</div>
								<script>
									var btn1 = document.getElementById('he1');
									function toggle1() {
 										if (btn1.style.color == 'red') {
											btn1.style.color = 'grey'
										} else {
											btn1.style.color = 'red'
  										}
									}
								</script>
							";
						}
					}
				?>
				</div>
			</div>	
		</section>
	</div>
</body>
