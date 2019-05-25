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
		
		input.text{
			width: 250px;
		}
	</style>
</head>
<body>
	<form method="post" action="2.php">
		<label>Tanggal ditengah</label>
		<input type="date" name="start">
		<input type="date" name="finish">

		<input type="submit" name="submit"><br><br>
	</form>

</body>
</html>

<?php
function date_range($first, $last, $step = '+1 day', $output_format = 'd-m-Y' ) {
    $dates = array();
    $current = strtotime($first . $step);
    $last = strtotime($last);

    while( $current < $last) {

        $dates[] = date($output_format, $current);
        $current =  strtotime($step, $current);
    }

    $i = 0;
    $len = count($dates);
    foreach ($dates as $key => $value) {
    	if ($i != $len -1) {
    		echo "'$value', ";
    	} else {
    		echo "'$value'";
    	} $i++;
    }
}

if (isset($_POST['submit'])) {
	date_range($_POST['start'], $_POST['finish']);
}

?>