<?php
    if (isset($_POST["username"], $_POST["password"])) {
    	include_once("main.php");
    	$username = $_POST["username"];
    	$password = $_POST["password"];
    	echo("You provide: ". $username." and ". $password);
    }
?>