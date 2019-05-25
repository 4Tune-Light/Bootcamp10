<!DOCTYPE html>
<html>
<head>
	<title>Soal 5</title>
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
	<form method="post" action="5.php">
		<table>
			<tr>
				<td><label>MKata</label></td>
				<td><input type="input" name="kata" placeholder="Masukkan Kata Disini"></td>
			</tr>
			<tr>
				<td><label>Huruf Diganti</label></td>
				<td><input type="input" name="diganti" placeholder="Masukkan Huruf Diganti Disini"></td>
			</tr>
			<tr>
				<td><label>Huruf Pengganti</label></td>
				<td><input type="input" name="pengganti" placeholder="Masukkan Huruf Pengganti Disini"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

function ganti_kata($kata, $diganti, $pengganti) {
	$aKata = str_split($kata);

	foreach ($aKata as $key) {
		if ($key == $diganti) {
			$key = $pengganti;
			$aJadi[] = $key;
		} else {
			$aJadi[] = $key;
		}
		
	}

	$jadi = implode($aJadi);

	echo "<h2>$jadi</h2>";
}

if (isset($_POST['submit'])) {
	ganti_kata($_POST['kata'], $_POST['diganti'], $_POST['pengganti']);
}

?>
