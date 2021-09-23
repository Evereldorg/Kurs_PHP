<?php 

	$x = 12;
	$y = 32;
	$z = 22.23;

	$bool_1 = $x != $y;
	echo "$x не равен $y поэтому выводим $bool_1 <br>";
	$bool_2 = $x < $y;
	echo "$x меньше $y поэтому выводим $bool_2 <br>";
	$bool_3 = !($x == $y); // НЕ
	echo "$x не равен $y, но из-за логического НЕ мы выводим $bool_3 <br>";
	$bool_4 = !($x > $y) || $z < $y; // ИЛИ
	echo "$bool_4 <br>";
	$bool_5 = !($x > $y) && $z < $y; // И
	echo "$bool_5 <br>";
	$bool_6 = $z != $x ^ $y < $x; // ИСК ИЛИ, когда либо 1 true, либо 1 false
	echo "$bool_6 <br>";

 ?>