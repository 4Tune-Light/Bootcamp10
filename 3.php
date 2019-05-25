<!DOCTYPE html>
<html>
<head>
	<title>Soal 3</title>
	<style type="text/css">
		label{
			font-weight: 600;
		}

		input{
			padding: 7px;
		}

		td{
			padding: 10px;
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
	<form method="post" action="3.php">
		<table>
			<tr>
				<td><label>Kalimat</label></td>
				<td><input type="input" name="letter" placeholder="Masukkan Kalimat Disini"></td>
				<td><input type="submit" name="submit" style="margin-top: 15px;"><br><br></td>
			</tr>
		</table>
		
	</form>

</body>
</html>

<?php 

function getLetter($letter, $i = 0) {
	$aLetter = str_split($letter);

	foreach ($aLetter as $key) {
		if ($key == 'a' || $key == 'i' || $key == 'u' || $key == 'e' || $key == 'o') {
			$i++;
		}
	}

	echo "<label>Huruf Hidup: </label> <span>$i</span>";
}

if (isset($_POST['submit'])) {
	getLetter($_POST['letter']);
}

?>
