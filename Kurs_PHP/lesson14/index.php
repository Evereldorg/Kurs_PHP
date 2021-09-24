<?php 

	function printWords ($x1, $y1) {
		$word = math ($x1, $y1);
		echo $word;
	}

	function math ($first, $second) {
		$summa = $first + $second;
		return $summa;
	}

	$x = 12;
	$y = 34;

	printWords($x, $y);

 ?>