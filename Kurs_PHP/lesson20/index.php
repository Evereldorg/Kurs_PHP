<?php 
	
	$x = 15;

	if (isset($x)) { // проверяет существование переменной

		echo "переменная существует<br>";

	} else 
		echo "переменная не существует<br>";

	unset($x); // удаляет переменную

	if (isset($x)) { // проверяет существование переменной

		echo "переменная существует<br>";

	} else 
		echo "переменная не существует<br>";

	$x = "15.34";

	$null = null;

	echo "Is Numeric ". is_numeric($x)."<br>"; // проверяет, в переменной число или нет(неважно строка или число), и возвращает true или false
	echo "Is Integer ". is_integer($x)."<br>"; // Проверяет является ли число переменная
	echo "Is Double ". is_double($x)."<br>"; // Проверяет является ли переменная целочисленной (если 3.14 то true)
	echo "Is String ". is_string($x)."<br>"; // Проверяет строкавая ли переменная
	echo "Is Bool ". is_bool($x)."<br>"; // Проверяет булево ли значение в переменной
	echo "Is Scalar ". is_scalar($x)."<br>"; // Проверяет не являет ли сложной переменной по типу массива
	echo "Is Null ". is_null($null)."<br>"; // Проверяет пустая ли переменная (ничего не присвоено)
	echo "Is Array ". is_array($x)."<br>"; // Проверяет массив это или нет
	echo "Type ". gettype($x)."<br>"; // Узнаём тип переменной
	echo "Type ". gettype($null)."<br>";
	

 ?>