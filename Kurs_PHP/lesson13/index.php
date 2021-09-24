<?php 

	for ($i=0; $i < 100; $i++) { 
		if ($i % 5 == 0) continue; {
			if ($i >= 16 && $i <= 43)
			echo "Переменная i = $i<br>";
		}

	}

	$x = 50;

	while ($x <= 100) {
		if ($x % 2 == 0) {
		echo "X равен = $x <br>";
		}
		$x++;
	}

	$z = 9;
	$n = 1;
	do {
		echo "Операция выполнилась $n раз<br>";
		$z++;
		$n++;
	}
	while ($z < 15); {
		echo "<br>Z стало $z";
	};

 ?>