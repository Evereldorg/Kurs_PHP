<?php 

	$arr = array(12,3.14,"Hello",true);
	echo $arr[1]."<br>";
	$arr[0] = 3.14;
	$arr[1] = 12;
	echo $arr[1];
	$arr[] = "New Element";
	echo "<br>".$arr[4]."<br><hr>";

	for ($i=0; $i < count($arr); $i++) { 
		echo $arr[$i]."<br>";
	}

	$list = array("age" => 17, "name" => "Max", "Student" => true);
	$list["age"] = 18;

	

	echo "<hr>".getAverage(array("first" => 12, "sec" => 45, "third" => 23, "forth" => 55));

	function getAverage($array) {
		$summa = 0;
		foreach ($array as $key => $value) {
			$summa += $value;
		}
		return $summa / count($array);
	}

 ?>