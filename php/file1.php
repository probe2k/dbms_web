<?php
	$conn = mysqli_connect('localhost', 'root', '', 'test');
	$name = $_POST['name'];
	$username = $_POST['username1'];
	$password = $_POST['password1'];
	$sql = "SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'";
	$query = $conn -> query($sql);
	$rows = mysqli_num_rows($query);
	if ($rows == 1) {
		echo "Successfully logged in";
		$_SESSION['user'] = $username;
		echo "<script>location.href = 'http://localhost/dbms/html/homepage.php';</script>";
	} else {
		echo "Failed!";
	}
?>

