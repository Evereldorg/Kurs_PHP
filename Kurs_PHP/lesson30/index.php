<?php 

	setcookie("num", 10, time () + 5);

	$num = (isset($_COOKIE["num"])) 
	? $_COOKIE["num"] : 0;
	$num++;

	setcookie("num", $num, time () + 4);
	echo "Пользователь обновил страницу $num раз";



 ?>