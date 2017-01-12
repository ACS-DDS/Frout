<?php 
	class Article 
	{
		private $id;
		private $matiere;
		private $longueur;
		private $largeur;
		private $epaisseurs;

		public function __construct($array)
		{
			$this->id = $array[0];
			$this->matiere = $array[1];
			$this->longueur = $array[2];
			$this->largeur = $array[3];
			$this->epaisseurs = array_map('trim', explode(',', $array[4]));

		}
	}
?>