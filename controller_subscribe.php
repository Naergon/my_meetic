<?php

require_once('user.php');


if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_de_naissance']) && isset($_POST['sexe']) && isset($_POST['ville']) && isset($_POST['email']) && isset($_POST['password']) && $_POST['nom'] !== "" && $_POST['prenom'] !== "" && $_POST['date_de_naissance'] !== "" && $_POST['sexe'] !== "" && $_POST['ville'] !== "" && $_POST['email'] !== "" && $_POST['password'] !== "") 
			{
				$new_user = new user;
				$new_user->addUser($_POST['nom'], $_POST['prenom'], $_POST['date_de_naissance'], $_POST['sexe'], $_POST['ville'], $_POST['email'], hash( "md5", $_POST['password'])) ;
			}
			else
			{
				echo "veuiller remplire touts les champ pour l'inscritpion";
			}

// var_dump($checkUserExists);



 
//  session_start();
// if(isset($_SESSION['email']))
// {  
// 	header('Location: index.php');
// }
// else
// {
// 	header('location: conn_inscription.php');
// }

