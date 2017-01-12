<?php

class Clients {
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

}