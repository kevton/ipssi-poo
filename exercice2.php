<?php

require_once('vendor/autoload.php');

use Ipssi\Evaluation\Useless;

new Useless(); // Ceci ne sert à rien

$document1 = new Document(
	"rouge", 
	[
		new Texte(
			245, 
			668, 
			"RGB(255, 160, 122)", 
			"Bonjour"),
		new Texte(
			4685, 
			500, 
			"RGB(168, 250, 12)", 
			"Poulpe"),
		new Texte(
			249, 
			1666, 
			"RGB(46, 21, 180)", 
			"Saperlipopete")
	],
	[
		new Forme(
			144, 
			6778, 
			"RGB(125, 48, 64)", 
			"Rond"),
		new Forme(
			6795, 
			4222, 
			"RGB(46, 94, 175)", 
			"Carré"),
		new Forme(
			134, 
			67, 
			"RGB(87, 164, 195)", 
			"Etoile")
	],
	[
		new Image(
			1948, 
			2468,  
			"Arbre.png"),
		new Image(
			1948, 
			2468,  
			"Planete.jpg"),
		new Image(
			1948, 
			2468,  
			"Image5.png")
	]);
echo "Le document est de couleur " . $document1->getCouleurDoc() . PHP_EOL;
echo "====================================" . PHP_EOL;
echo "Il possede :" . PHP_EOL;
//var_dump($document1->getListeTexte());
foreach ($document1->getListeTexte() as $UnTexte) {
	echo 'Le texte : "' . $UnTexte->getTexte() . '" de couleur ' . $UnTexte->getCouleurTexte();
	echo "aux coordonées : " . PHP_EOL . "    X=" . $UnTexte->getCoordX() . PHP_EOL . "    Y=" . $UnTexte->getCoordY() . PHP_EOL;
}
echo PHP_EOL . "Ainsi que:" . PHP_EOL;
foreach ($document1->getListeForme() as $UneForme) {
	echo 'La Forme : "' . $UneForme->getNomForme() . '" de couleur ' . $UneForme->getCouleurForme();
	echo " aux coordonées : " . PHP_EOL . "    X=" . $UneForme->getCoordX() . PHP_EOL . "    Y=" . $UneForme->getCoordY() . PHP_EOL;
}
echo PHP_EOL . "Et enfin :" . PHP_EOL;
foreach ($document1->getListeImage() as $UneImage) {
	echo 'L\'Image : "' . $UneImage->getNomImage();
	echo "aux coordonées : " . PHP_EOL . "    X=" . $UneImage->getCoordX() . PHP_EOL . "    Y=" . $UneImage->getCoordY() . PHP_EOL;
} 
