<?php 

	// $file = fopen("a.txt", "a+t"); // r ставит курсор в начало, r+ ещё и позволяет записывать, w только для записи и обрезает файл до 0 длины, w+, а+ открывает файл для чтения и записи и ставит курсор в конец, (+t дополнение позволяющие использовать знаки табуляций, +b наоборот запрещает) 
	// fwrite($file, "Example\nText\nPrimer");
	// fclose($file);

	$file = fopen("a.txt", "r+t");
	while (!feof($file)) {
		echo fread($file, 1)."<br>";
	}

	fseek($file, 0); // переводит курсор в выбранное место

	echo fread($file, 1)."<br>";

	fclose($file);

	echo "<br><hr><br>";

	file_put_contents("c.txt", "TEST testiryem testovii fail"); // создать файл и добавить текст

	echo "<br>".file_get_contents("c.txt")."<br>"; //Выводит файл

	echo file_exists("a.txt")."<br>"; // Проверяет на существование файл

	rename("c.txt", "b.txt"); // Переименовать файл

	unlink("b.txt"); // Удаляет файл

 ?>