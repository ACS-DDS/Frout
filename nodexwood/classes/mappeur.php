<?php

class Mapper {

	public static function getCatalogue($typo) {
		$cat = [];

		$h = fopen('/home/quentinp/nodexwood/produits.csv', 'r');

		while ($ligne = fgetcsv($h, 0, ';')) {
			$typos = array_map('trim', explode(',', $ligne[5]));
			if (in_array($typo, $typos)) {
				$cat[] = new Article($ligne);
			}
		}
		return $cat;
	}
}