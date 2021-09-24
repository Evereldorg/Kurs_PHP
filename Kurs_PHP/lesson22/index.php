<?php 

	$str = "Lol this is example";

	echo strlen($str)."<br>"; // Считает кол-во символов в строке
	echo strpos($str, "L")."<br>"; // Ищет начало строки(Буква T почему то не ищется и возвращает NULL)
   
	if (strpos($str, "L") === false) // === важно
		echo "L не найдено"."<br>";
	 else 
		echo "L найдено"."<br>";
	
	echo substr($str, 2)."<br>"; // Удаляет буквы до определённого значения (можно удалять с 2 сторон и тд. и тп.)

	echo str_replace("is", "abc", $str)."<br>"; // аменяет все сходства на нужные значения

	echo str_replace(array("is","ple"), array("abc","fgh"), $str)."<br>"; // аменяет все сходства на нужные значения массивов

	$string = "<b>Жирный текст</b>";
	echo $string."<br>";

	echo htmlspecialchars($string)."<br>"; // Все теги трансформирует в экранизаторы [безопасность]

	echo "<br>".strtolower($str)."<br>"; // Все символы запишет в нижнем регистре
	echo "<br>".strtoupper($str)."<br>"; // Все символы запишет в верхнем регистре

	echo md5($str)."<br>"; // Кодировка, хорошо для паролей
	echo trim($str)."<br>"; // Удаляет лишние пробелы

 ?>