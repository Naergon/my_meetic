<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title>mymeetic</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<!-- <script type="text/javascript" src="formulaire.js"></script> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
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
<header>
	<form action="deconnexion.php">
		<input class="btn btn-warning"  type="submit" name="" value="Deconnexion">
	</form>
</header>
<div class="container-fluid" >
	<div class="row">
		<div class="offset-lg-4 col-lg-4 IDP">

		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="offset-lg-4 col-lg-4 info_profil">
			<form action="" method="post">
				<span>Nom</span>
				<input class="form-control col-lg-10" type="text" value="<?php echo $user_info[0]->nom?>" name="nom">
				<input class="btn btn-primary" type="submit" name="nom" value="Change">
			</form>
			<form action="" method="post">
				<span>Prenom</span>
				<input class="form-control col-lg-10"  type="text" value="<?php echo $user_info[0]->prenom?>" name="prenom">
				<input class="btn btn-primary" type="submit" name="nom" value="Change">
			</form>
			<form action="" method="post">
			<span>Date de naissance</span>
			<input class="form-control col-lg-10" type="text" value="<?php echo $user_info[0]->date_de_naissance?>" name="date_de_naissance">
			<input class="btn btn-primary" type="submit" name="nom" value="Change">
			</form>
			<form action="" method="post">
				<span>Sex</span>
				<input class="form-control col-lg-10" type="text" value="<?php echo $user_info[0]->sexe?>" name="sex">
				<input class="btn btn-primary" type="submit" name="nom" value="Change">
			</form>
			<form action="" method="post">
				<span>Lyon</span>
				<input class="form-control col-lg-10" type="text" value="<?php echo $user_info[0]->ville?>" name="ville">
				<input class="btn btn-primary" type="submit" name="nom" value="Change">
			</form>
			<form action="" method="post">
				<span>addrese email</span>
				<input class="form-control col-lg-10" type="text" value="<?php echo $user_info[0]->email?>"  name="email">
				<input class="btn btn-primary" type="submit" name="nom" value="Change">
			</form>
			<form action="" method="post">
				<span>Change assword</span>
				<input class="form-control col-lg-10" type="password"  name="email">
				<input class="btn btn-primary" type="submit" name="nom" value="Change">
			</form>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div >
			
		</div>
	</div>
	
</div>

</body>
</html>
