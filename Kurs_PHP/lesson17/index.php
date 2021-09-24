<?php 

	$x = 12;
	function test () {
		global $x;
		$x += 10;
		echo $x;
		$GLOBALS["x"] = 7;
		echo "<br><hr>".$GLOBALS["x"]."<hr>"; 
	}

	test();

	function test_2 () {
		static $id;
		$id++;
		echo $id."<br>";
	}

	for ($i=0; $i < 10; $i++) { 
		test_2();
	}

 ?>