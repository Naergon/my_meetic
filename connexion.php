<?php
require_once('user.php');

	 

if (isset($_POST['email']) && isset($_POST['password'])) 
{
	$connexion = new user;
	
	if($connexion->userExist($_POST['email'], hash( "md5", $_POST['password'])) == true)
	{
		session_start();
		header('location: index.php');
		$_SESSION['email'] = $_POST['email'];
	}
	else
	{
		echo "Mauvais email ou mot de passe!";
		header('location: connexion.html');
	}
 }
