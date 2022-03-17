<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/style.css" />
		<script src="https://kit.fontawesome.com/e90d22fc03.js" crossorigin="anonymous"></script>
		<title>LOGIN</title>
	</head>

	<body>
		<div class='container'>
			<div class='form-box'>
				<div class='button-box'>
					<div id='btn'></div>
					<button type='button' class='toggle-btn' onclick="login()">LOGIN</button>
					<button type='button' class='toggle-btn' onclick="register()">REGISTER</button>
				</div>
				<div id="login_form" class="input-group">
					<form action='../php/file1.php' method='post'>
						<i class="fa fa-user"></i>
						<input type='text' placeholder='Username' name='username1' required /><br>
						<i class="fa fa-lock"></i>
						<input type='password' placeholder='Password' name='password1' required /><br>
						<center><button type='submit' id='log' name='login'>LOGIN</button></center>
					</form>
				</div>
				<div id="register_form" class="input-group">
					<form action='../php/file.php' method='post'>
						<i class="fas fa-id-card"></i>
						<input type='text' placeholder='Name' name='name' required /><br>
						<i class="fa fa-user"></i>
						<input type='text' placeholder='Username' name='username' required /><br>
						<i class="fa fa-lock"></i>
						<input type='password' placeholder='Password' name='password' required /><br>
						<center><button type='submit' id='reg' name='register'>REGISTER</button></center>
					</form>
				</div>
			</div>
		</div>

		<script>
			var x = document.getElementById("login_form");
			var y = document.getElementById("register_form");
			var z = document.getElementById("btn");

			function register() {
				x.style.left = "-400px";
				y.style.left = "50px";
				z.style.left = "110px";
			}

			function login() {
				x.style.left = "50px";
				y.style.left = "450px";
				z.style.left = "0px";
			}
		</script>
	</body>
</html>
