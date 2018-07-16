<?php

require_once('user.php');


	$new_user = new user;
	$new_user->addUser($_POST['nom'], $_POST['prenom'], $_POST['date_de_naissance'], $_POST['sexe'], $_POST['ville'], $_POST['email'], hash( "md5", $_POST['password'])) ;

// var_dump($checkUserExists);
// else
// {
// 	echo "Veuillé remplire tout les champ pour l'inscription";
// }



 
 // session_start();
// if($_SESSION['pseudo'] == '')
// {  
// 	header('Location: conn_inscription.php');
// }

