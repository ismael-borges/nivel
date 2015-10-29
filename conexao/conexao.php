<?php
	
	return new PDO('mysql:host=localhost;dbname=nivelconstrucoes', 'root', '123456',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

?>