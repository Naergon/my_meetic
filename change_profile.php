<?php
include('user.php');
// var_dump($_POST['columns']);
// var_dump($_POST['change']);
// var_dump($_POST['id_membre']);
session_start();
if ($_SESSION['email'] !== "")
{
	
	if ($_POST['columns'] == 'password') 
	{
		// echo "bolose";
		$verif_password = new user;
		// var_dump($_SESSION['email']);
		$verif_password = $verif_password->verifPassword($_SESSION['email']);
		// var_dump($verif_password);
		var_dump($verif_password[0]->password);
		// var_dump($mdp_hash);
		var_dump(password_verify($_POST['last_password'], $verif_password[0]->password));
		if(password_verify($_POST['last_password'], $verif_password[0]->password) == true)
		{
			$requet = new user;
			$requet->changeProfil($_POST['columns'], password_hash($_POST['change'], PASSWORD_DEFAULT), $_POST['id_membre']);
			var_dump($requet);
			header('location: index.php');
			// echo "bonjours";
		}
		else
		{
			echo "mot de passe incorect";
		}
	}	
	else
	{
		$requet = new user;
		$requet->changeProfil($_POST['columns'], $_POST['change'], $_POST['id_membre']);
		var_dump($requet);
	}
}
else
{		
	header('location: index.php');
}