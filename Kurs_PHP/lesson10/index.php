<?php 

	$str = "Example";
	$num = 0;

	$bool_1 = $str == true;
	echo "$bool_1 = $str == true;";

	$bool_2 = $num == "";
	echo "<br>$bool_2 = $num == \"\";<br><hr>";

	$bool_3 = $str === true;
	echo "$bool_3 = $str === true;";

	$bool_4 = $num === "";
	echo "<br>$bool_4 = $num === \"\";";

 ?>