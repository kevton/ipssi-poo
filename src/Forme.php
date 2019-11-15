<?php
namespace Ipssi\Evaluation;
use Ipssi\Evaluation\Elements;
class Forme extends Elements{
	private $couleur;
	private $nomForme;
	public function __construct(
		int $coordX, 
		int $coordY, 
		string $couleur, 
		string $nomForme
	){
		parent::__construct($coordX, $coordY);
		$this->couleur = $couleur;
		$this->nomForme = $nomForme;
	}
	public function getCouleurForme(): string{
		return $this->couleur;
	}
	public function getnomForme(): string{
		return $this->nomForme;
	}
} 