<?php

define("PDO_HOST", "localhost") ;
define("PDO_DBBASE", "my_meetic");
define("PDO_USER", "root");
define("PDO_PW","30042436" );

try
{
	$connection = new PDO( 
		"mysql:host=" . PDO_HOST . ";".
		"dbname=" . PDO_DBBASE, PDO_USER, PDO_PW,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
	// echo "connection succes";
}


catch (PDOException $e)
{
	echo "Erreur !: " . $e->getMessage() . "<br/>";
	die();
}

