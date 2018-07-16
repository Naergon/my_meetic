<?php
class user
{
	
	private $conn ;
	

	function __construct()
	{
		$this->conn = new PDO("mysql:host=localhost; dbname=my_meetic", 'root', '30042436') ;
	}

	public function getUser()
	{

	}

	public function getUserByfilter($filter)
	{

	}

	public function userExist($email, $password)
	{

	}
	public function addUser($nom, $prenom, $date_de_naissance, $sexe, $ville, $email, $password)
	{

			$checkUserExists = $this->conn->prepare("SELECT COUNT(nom) FROM membre WHERE email = :email") ;
			$checkUserExists->bindParam(':email', $email, PDO::PARAM_STR);
			$checkUserExists->execute();
			$result = $checkUserExists->fetch();
			$count = $result[0];
			
			$naissance = $_POST['date_de_naissance'];
			$under18 = (date('Y-m-d') - $naissance);
			
			if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_de_naissance']) && isset($_POST['sexe']) && isset($_POST['ville']) && isset($_POST['email']) && isset($_POST['password']) && $_POST['nom'] !== "" && $_POST['prenom'] !== "" && $_POST['date_de_naissance'] !== "" && $_POST['sexe'] !== "" && $_POST['ville'] !== "" && $_POST['email'] !== "" && $_POST['password'] !== "") 
			{
				if ($under18 >= 18) 
				{
					if ($count == 0) 
					{

						
					$requet = $this->conn->prepare('INSERT INTO membre (nom, prenom, date_de_naissance, sexe, ville, email, password) VALUES (:nom, :prenom, :date_de_naissance, :sexe, :ville, :email, :password)');
					$requet->bindParam(':nom', $prenom, PDO::PARAM_STR) ;
					$requet->bindParam(':prenom', $nom, PDO::PARAM_STR) ;
					$requet->bindParam(':date_de_naissance', $date_de_naissance, PDO::PARAM_STR) ;
					$requet->bindParam(':sexe', $sexe, PDO::PARAM_STR) ;
					$requet->bindParam(':ville', $ville, PDO::PARAM_STR) ;
					$requet->bindParam(':email', $email, PDO::PARAM_STR) ;
					$requet->bindParam(':password', $password, PDO::PARAM_STR) ;
					// var_dump($requet);
					return $requet->execute();

					}
					else
					{
						echo "cette addrese email existe deja";
					}
				}
				else
				{
					echo "vous devez avoir plus de 18ans pour vous inscrire" ;
				}
			}
			else
			{
				echo "veuiller remplire touts les champ pour l'inscritpion";
			}
	}
}
