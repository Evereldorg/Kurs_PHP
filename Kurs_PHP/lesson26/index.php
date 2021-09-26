<?php 

	echo __FILE__."<br>";
	echo fileperms(__FILE__);
	chmod(__FILE__, 0777);

 ?>