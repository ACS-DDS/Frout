<?php

class Client {
	private $nom;
	private $prenom;
	private $login;
	private $typologie;

	public function __construct($array) {
		$this->prenom = $array[0];
		$this->nom = $array[1];
		$this->login = $array[2];
		$this->typologie = $array[4];
	}

	public function getTypologie() {
		return $this->typologie;
	}

	public function getNom() {
		return $this->nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}
}

?>

 

