<?php 

	$x = 13;

	switch ($x) {
		case '12':
			echo "Это числовая переменная равна 12";
			break;
		case 'Hello':
			echo "Это строковая переменная";
			break;	
		case '7':
			echo "Это числовая переменная равна 7";
			break;
		default:
			echo "Эта переменная нам не известна";
			break;
	}

 ?>