<?php

 session_start();
if($_SESSION['email'] == '')
{  
	header('Location: conn_inscription.php');
	exit;
}
else
{
	include('user.php');
	$profil = new user;
	$user_info = $profil->getProfil($_SESSION['email']);
	// var_dump($user_info[0]->nom);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title>mymeetic</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="connexion.css"> -->
	<!-- <script type="text/javascript" src="formulaire.js"></script> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form accept="recherch_membre.php">
		<select class="form-control col-lg-3" name="sex">
			
		</select>
		<input type="text" name="ville" class="form-control col-lg-3">
		<select class="form-control col-lg-3" name="age">
			
		</select>
		<input type="submit" name="recherche" class="btn btn-primary ">
		
	</form>
</body>
</html>