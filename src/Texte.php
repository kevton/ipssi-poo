<?php
namespace Ipssi\Evaluation;
use Ipssi\Evaluation\Elements;
class Texte extends Elements{
	private $couleur;
	private $texte;
	public function __construct(
		int $coordX, 
		int $coordY, 
		string $couleur, 
		string $texte
	){
		parent::__construct($coordX, $coordY);
		$this->couleur = $couleur;
		$this->texte = $texte;
	}
	public function getCouleurTexte(): string{
		return $this->couleur;
	}
	public function getTexte(): string{
		return $this->texte;
	}
} 