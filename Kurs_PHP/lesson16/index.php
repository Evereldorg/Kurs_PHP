<?php 

	$arr = array(array(12,4.32,"String"),array("Example"),array(45,"Str"));

	for ($i=0; $i < count($arr); $i++) { 
		for ($b=0; $b < count($arr[$i]); $b++) { 
			echo $arr[$i][$b]." | ";
		}
	echo "<br>";
	}

 ?>