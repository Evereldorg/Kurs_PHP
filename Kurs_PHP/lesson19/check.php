<?php 
 if (isset($_POST["do_post"])) {
 	if ($_POST["text"] != "") {
 		print_r($_POST);
		echo "<br>".$_POST["text"];
 		} else { 
 		 header("Location:index.php");
 		}
	}

 ?>