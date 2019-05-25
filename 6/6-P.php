<?php

	$dbname = "programmer";
	$host = "localhost";
	$username = "root";
	$password = "";

	$name = $_POST['name'];

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if (mysqli_connect_errno()) {
		echo "Konesi Ke Server Gagal";
		exit();
	}

	$query = "INSERT INTO users(name) VALUE ('$name')";
	mysqli_query($conn, $query);

	$num = mysqli_affected_rows($conn);

	if ($num > 0) {
		echo "Data Yang Anda Masukkan Sudah Disimpan";
	} else {
		echo "Data Gagal Disimpan Ke Dalam Database";
	}
	header('Location: ' . $_SERVER["HTTP_REFERER"] );
	exit;
?>