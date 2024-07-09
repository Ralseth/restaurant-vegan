<?php
	$mysql = new mysqli("localhost", "root", "", "vegan");
  	$mysql->query("SET NAMES 'utf8'");

  	if ($mysql->connect_error){
    	echo "Error: ".$mysql->connect_error;
  	}

	if($_POST['send-reviews']) {
        $mysql->query("INSERT INTO  `reviews` (`name`, `description`) VALUES('".$_POST['username']."', '".$_POST['description']."')");
	}

	header("location: reviews.php");
	exit();
?>