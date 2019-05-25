<?php

	$dbname = "programmer";
	$host = "localhost";
	$username = "root";
	$password = "";

	$skill = $_POST['skill'];
	$user_id = $_POST['user_id'];

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if (mysqli_connect_errno()) {
		echo "Konesi Ke Server Gagal";
		exit();
	}

	$query = "INSERT INTO skills(name, user_id) VALUES ('$skill', $user_id)";
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
