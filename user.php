<?php

class user
{
	protected $_host = "localhost" ;
	protected $_dbname = "my_meetic" ;
	protected $_username = "root" ;
	protected $_password = "30042436" ;

	function __construct($_host, $_dbname, $_username, $_password)
	{
		$this->_host = $_host;
		$this->_dbname = $_dbname;
		$this->_username = $_username;
		$this->_password = $_password;
	}

	public function PDOconnexion()
	{
		$bdd = new PDO('mysql:host=' . $this->_host.  '; dbname=' . $this->_dbname, $this->_username, $this->_password);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
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
	public function addUser($nom, $prenom, $DDN, $sexe, $email, $password)
	{
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->DDN = $DDN;
		$this->sexe = $sexe;
		$this->email = $email
		$this->passsword = $password;
	}
}