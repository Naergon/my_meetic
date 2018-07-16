<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<title>mymeetic</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="conn_inscription.css">
	<script type="text/javascript" src="formulaire.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<div class="container-fluid">
		<div class="row justify-content-center">
			<form action="controller_subscribe.php" method="POST" class="col-md-2 col-sm-6 col-lg-3 formulaire">
				<h3 class="titre_formulaire">Inscription</h3>
				<span>Nom</span>
				<input placeholder="ex: nicola" type="text" name="prenom" class="form-control">
				<span>Prenom</span>
				<input placeholder="ex: pelisson" type="text" name="nom" class="form-control">
				<span>Sex</span>
				<select name="sexe" class="form-control">
					<option value="0">Sex</option>
					<option value="Homme">Homme</option>
					<option value="Femme">Femme</option>
					<option value="nerd">Nerd</option>
					<!-- <option value="2">Apache helicoptere</option> -->
				</select>
				<span>Ville</span>
				<input placeholder="ex: Lyon" type="text" name="ville" class="form-control">
				<span>Adresse email </span>
				<input placeholder="ex: toietmoi@gmail.com" type="text" name="email" class="form-control" required="required" >
				<span>date de naissance</span>
				<input class="form-control col-lg-6 date_de_naissance" type="date" name="date_de_naissance">
				<span>Veuiller crée un mot de passe</span>
				<input class="form-control" type="password" name="password" require="required">
				<span>Veuiller retaper votre mot de passe</span>
				<input class="form-control" type="password" name="verif_mot_de_passe">
				<input type="submit" value="Inscription" name="inscription" class="btn btn-primary btn_inscription" >
			</form>
			<form>
				<input type="submit" value="Connexion" name="Connexion" class="btn btn-success">
			</form>
			
		</div>
	</div>
</body>
</html>




