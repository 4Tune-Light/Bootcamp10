<!DOCTYPE html>
<html>
<head>
	<title>Soal 4</title>
	<style type="text/css">
		label{
			font-weight: 600;
		}

		td{
			padding: 10px;
		}

		input{
			padding: 7px;
		}
		
		input.text{
			width: 250px;
		}

		span {
			font-size: 24px;
		}
	</style>
</head>
<body>
	<form method="post" action="4.php">
		<table>
			<tr>
				<td><label>Lebar Matriks</label></td>
				<td><input type="input" name="length" placeholder="Masukkan Lebar Matriks Disini"></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
	<br>

</body>
</html>

<?php

function matriks($length) {
	$first = 1;
	$last = $length;
	$middle = ($length + 1) / 2;

echo "<table>";
	for($i = 1; $i <= $length; $i++) {
		echo "<tr>";
		for ($j = 1; $j <= $length; $j++) {
			if ($i == 1) {
				echo "<td>X</td>";
			} elseif ($i ==  $last) {
				echo "<td>X</td>";
			} elseif ($j == $middle) {
				echo "<td>X</td>";
			} else {
				echo "<td>=</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
}


if (isset($_POST['submit'])) {
	matriks($_POST['length']);
}

?>
