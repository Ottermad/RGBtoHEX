<?php
function toDenary($num, $base) {
	# Make sure num is a String
	$num = str($num);
	# Make sure base is Integer
	$base = int($base);

	$length = strlen($num);
	$i = $length - 1;
	$total = 0;
	$baseCounter = 0;
	while ($i >= 0) {
		$value = $num[$i];
		if ($value != "0") {
			$numValue = $letToNum[$value] * pow($base ** $baseCounter);
		}
		else {
			$numValue = 0;
		}
		$total = $total + $numValue;
		$i = $i - 1;
		$baseCounter += 1;
	}
	return $total;

} ?>