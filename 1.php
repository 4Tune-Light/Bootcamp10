<!DOCTYPE html>
<html>
<head>
	<title>Soal 1</title>

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
	</style>
</head>

<body>
	<form method="post" action="1.php">
		<table>
			<tr>
				<td><label>Nama</label></td>
				<td><input class="text" type="text" name="name" placeholder="Masukkan nama anda disini" required></td>
			</tr>
			<tr>
				<td><label>Alamat</label></td>
				<td><input class="text" type="text" name="address" placeholder="Masukkan alamat anda disini" required></td>
			</tr>
			<tr>
				<td><label>Hobi</label></td>
				<td><input class="text" type="text" name="hobbies" placeholder="Masukkan hobi anda disini" required> <sub>Gunakan tanda Koma(,) untuk memisahkan hobi</sub></td>
			</tr>
			<tr>
				<td><label>Status</label></td>
				<td>
					<input type="radio" name="is_married" value="0" required>Belum Menikah
					<input type="radio" name="is_married" value="1">Menikah
				</td>
			</tr>
			<tr>
				<td><label>Sekolah</label></td>
				<td><input class="text" type="text" name="highSchool" placeholder="Masukkan nama SMA/SMK anda disini" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="text" type="text" name="university" placeholder="Masukkan nama Universitas anda disini" required></td>
			</tr>
			<tr>
				<td><label>Keahlian</label></td>
				<td>
					<input id="front" type="checkbox" name="skill[]" value="front-end" onchange="myFunction()">Front-End
					<input id="frontScore" type="hidden" name="score[]" value="0">
					<input id="back" type="checkbox" name="skill[]" value="back-end" onchange="myFunction()"> Back-End
					<input id="backScore" type="hidden" name="score[]" value="0">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	<br>

	<?php
	function process(){
		$biodata = new stdClass();

		$biodata->name = $_POST['name'];
		$biodata->address = $_POST['address'];

		$hobbies = explode(",", $_POST['hobbies']);
		$biodata->hobbies = $hobbies;

		if ($_POST['is_married'] == '1') {
			$biodata->is_married = true;
		} else {
			$biodata->is_married = false;
		}

		$school = (object) ['highSchool' => $_POST['highSchool'], 'university' => $_POST['university']];
		$biodata->school = $school;

		$skills = (object) ['name' => $_POST['skill']];
		$score = $_POST['score'];
		foreach ($score as $key) {
			if ($key != 0) {
				$skills->score[] = $key;
			}
		}
		$biodata->skills = $skills;

		$json = json_encode($biodata);


		echo $json;
	}

	if (isset($_POST['submit'])) {
		process();
	}
?>


</body>
</html>

<script>
	function myFunction() {
		if (document.getElementById('front').checked) {
			document.getElementById('frontScore').value=100;
		} else {
			document.getElementById('frontScore').value=0;
		}

		if (document.getElementById('back').checked) {
			document.getElementById('backScore').value=100;
		} else {
			document.getElementById('backScore').value=0;
		}
	}
</script>