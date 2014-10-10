<?php
function fromDenary (num, base) {
	# Make sure arguments are Integers
	$num = intval($num);
	$base = intval($base);
	echo $num, $base;
	$div = -1;
	$remainder = 0 # Remainder variable;
	$remainders = [];
	$baseString = "";
	while ($div != 0) {
		$div = $num // $base;
		echo $div;
		$remainder = $num % $base;
		echo $remainder;
		$newRemainder = $numToLet[$remainder];
		$remainders.append($newRemainder);
		$num = $div;
	}
	foreach ($remainders as $item) {
    	$baseString = $item + $baseString;
	}
	return $baseString;
}
?>