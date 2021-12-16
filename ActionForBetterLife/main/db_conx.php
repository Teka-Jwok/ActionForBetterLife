<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "abl_website";
    $db_conx = mysqli_connect($host, $username, $password, $database);
    if (!$db_conx) {
    	echo("Can't connected to database");
    	exit();
    }
?>