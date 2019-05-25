<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<title>Soal 6</title>
</head>
<body>
	<h2>Data Programmer Arkademy</h2>
	<div>
		<form method="post" action="6-P.php">
			<div>
				<input type="text" name="name" placeholder="Tambahkan Programmer">
			</div>
			<div>
				<input type="submit" name="submit" value="Confirm">
			</div>
		</form>
	</div>

	<?php

	$dbname = "programmer";
	$host = "localhost";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if (mysqli_connect_errno()) {
		echo "Konesi Ke Server Gagal";
		exit();
	}

	$query = "SELECT users.name, skills.name FROM users INNER JOIN skills ON users.id = skills.user_id";
	$result = mysqli_query($conn, $query);

	if ($result) {
		while ($row = mysqli_fetch_row($result)) {
	?>
		<div>
			<div>
				<div>
					<?php echo $row[0]; ?>
				</div>
				<div>
					<?php echo $row[1]; ?>
				</div>
			</div>
			<div>
				<form method="post" action="6-S.php">
					<div>
						<input type="text" name="name" placeholder="Tambahkan Skill">
					</div>
					<div>
						<input type="submit" name="submit" value="Add">
					</div>
				</form>
			</div>
		</div>
	<?php }
	}
	mysqli_free_result($result);
	?>
	
</body>
</html>