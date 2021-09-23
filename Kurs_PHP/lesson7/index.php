<?php 

	$x = 32;
	$y = 54.35;
	$summ = $x + $y;
	$diff = $x - $y;
	$mult = $x * $y;
	$dil = $x / $y;
	$z = 12;
	$ostatok = $x % $z;

	echo "Сумма из $x и $y = $summ<br>";
	echo "Разность из $x и $y = $diff<br>";
	echo "Умножение из $x и $y = $mult<br>";
	echo "Деление из $x и $y = $dil<br>";
	echo "Остаток при делений из $x и $z = $ostatok<br>";
	
	$x++;
	$x += 10;
	$x /= 4;
 ?>