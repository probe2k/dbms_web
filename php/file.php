<?php
	$conn = mysqli_connect('localhost', 'root', '', 'test');
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (isset($_POST['register'])){
		$sql = "INSERT INTO `login` (`name`, `username`, `password`) VALUES ('$name', '$username', '$password')";
		$query = $conn -> query($sql);
		echo "Successfully registered";
		echo "<script>location.href = 'http://localhost/dbms/html/index.php';</script>";
	}
?>
