<?php

class Mapper {

	public static function getCatalogue($typo) {
		$cat = [];

		$h = fopen('/home/quentinp/nodexwood/produits.csv', 'r');

		while ($colonne = fgetcsv($h, 0, ';')) {
			$typos = array_map('trim', explode(',', $colonne[5]));
			if (in_array($typo, $typos)) {
				$cat[] = new Article($colonne);
			}
		}
		return $cat;
	}
}