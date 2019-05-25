<!DOCTYPE html>
<html>
<head>
	<title>Soal 2</title>
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
	</style>
</head>
<body>
	<form method="post" action="2.php">
		<table>
			<tr>
				<td><label>Tanggal ditengah</label></td>
				<td><input type="date" name="start"></td>
				<td><input type="date" name="finish"></td>

				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>


</body>
</html>

<?php
function date_range($first, $last, $step = '+1 day', $output_format = 'd-m-Y' ) {
    $dates = array();
    $current = strtotime($first);
    $last = strtotime($last);

    while( $current <= $last) {

        $dates[] = date($output_format, $current);
        $current =  strtotime($step, $current);
    }

    $i = 0;
    $len = count($dates);
    echo "<h3>";
    foreach ($dates as $key => $value) {
    	if ($i != $len) {
    		echo "'$value', ";
    	} else {
    		echo "'$value'";
    	} $i++;
    }
    echo "</h3>";
}

if (isset($_POST['submit'])) {
	date_range($_POST['start'], $_POST['finish']);
}

?>