<?php 

	$start = microtime(true);

	echo time()."<br>";

	echo microtime(true)."<br>";

	echo "Время работы скрипта: ".(microtime(true) - $start)." Секунд<br>";

	$time = mktime(12, 35, 23, 12, 7, 2007);

	echo date("Y-m-d H:i:s", $time)."<br>";

	$arr = getdate($time);

	print_r ($arr);

	echo "<br>".checkdate(4, 12, 2020); // Проверка существует ли такая дата

 ?>