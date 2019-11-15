<?php
require_once('vendor/autoload.php');
use Ipssi\Evaluation\Oeuvre;
use Ipssi\Evaluation\Emprunt;
use Ipssi\Evaluation\Adherent;
$climate = new League\CLImate\CLImate;
$ListeOeuvre1 = [
	new Oeuvre("Nom Oeuvre1", 1),
	new Oeuvre("Nom Oeuvre2", 2),
	new Oeuvre("Nom Oeuvre3", 3),
	new Oeuvre("Nom Oeuvre4", 4),
	new Oeuvre("Nom Oeuvre5", 5)
];
$ListeOeuvre2 = [
	new Oeuvre("Nom Oeuvre1", 1),
	new Oeuvre("Nom Oeuvre2", 2),
	new Oeuvre("Nom Oeuvre3", 3),
	new Oeuvre("Nom Oeuvre4", 4),
	new Oeuvre("Nom Oeuvre5", 5)
];
$ListeEmprunt = [
	new Emprunt($ListeOeuvre1, new \DateTime("2019-06-12"), new \DateTime("2019-06-26"), new \DateTime("2019-06-21")),
	new Emprunt($ListeOeuvre2, new \DateTime("2019-09-22"), new \DateTime("2019-10-06"), new \DateTime("2019-09-04")),
	new Emprunt($ListeOeuvre3, new \DateTime("2019-03-01"), new \DateTime("2019-03-15"), new \DateTime("2019-03-04"))
];
$Adherent = new Adherent(
	"Nom Test", 
	[
		new Emprunt(
			[
			], 
			668, 
			"RGB(255, 160, 122)", 
			"Bonjour"),
		new Emprunt(
			4685, 
			500, 
			"RGB(168, 250, 12)", 
			"Poulpe"),
		new Emprunt(
			249, 
			1666, 
			"RGB(46, 21, 180)", 
			"Saperlipopete")
	]); 