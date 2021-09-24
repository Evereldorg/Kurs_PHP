<?php 

	$arr = array(12,34,56,23,22);


	echo count($arr)."<br>"; // считает кол-во элементов в массиве
	sort($arr); // сортировка по возрастанию
	print_r($arr); // вывод массива на экран
	echo "<br>";
	rsort($arr); // сортировка по убыванию
	print_r($arr);
	echo "<br>";
	$alist = array("one" => 23, "two" => "4545", "tree" => "325", "four" => "3175");
	asort($alist); // Сортирует значения по возрастанию, но запоминает ключи
	print_r($alist);
	echo "<br>";
	arsort($alist); // Сортирует значения по убыванию, но запоминает ключи
	print_r($alist);
	echo "<br>";
	ksort($alist); // Сортирует значения по ключам
	print_r($alist);
	echo "<br>";
	krsort($alist); // Сортирует значения по ключам
	print_r($alist);
	echo "<br>";	
	shuffle($arr);// Меняет элементы в массиве рандомно
	print_r($arr); 
	echo "<br>";

	in_array(22, $arr); // Проверка существования элемента в массиве
	echo "<br>";

	$arr_1 = array(53,2,64,34);
	$arr_2 = array(55,75,11);

	$arr_3 = array_merge($arr_1,$arr_2);
	print_r($arr_3); 
	echo "<br>";	

	$arrDone = array(1,2,3,4,5,6,7,8);

	array_slice($arrDone, 1, -2); // Удаляет элементы массива
	print_r($arrDone); 
	echo "<br>";

	unset($arr[0]); // удаляет выбранную ячейку массива
	print_r($arr); 
	echo "<br>";
 ?>