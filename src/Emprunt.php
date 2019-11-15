<?php
namespace Ipssi\Evaluation;
use Ipssi\Evaluation\Oeuvre;
class Emprunt{
	private $listeOeuvre;
	private $dateEmprunt;
	private $dateRenduTH;
	private $dateRenduEFF;
	public function __construct(
		array $listeOeuvre=[],
		\DateTimeInterface $dateEmprunt=new \DateTime(),
		\DateTimeInterface $dateRenduTH=new \DateTime()->add(new \DateInterval('P14D')),
		$dateRenduEFF=NULL
	){
		$this->listeOeuvre = $listeOeuvre;
		$this->dateEmprunt = $dateEmprunt;
		$this->dateRenduTH = $dateRenduTH;
		$this->dateRenduEFF = $dateRenduEFF;
	}
	public function getListeOeuvre(): array{
		return $this->listeOeuvre;
	}
	public function getDateEmprunt(): \DateTimeInterface{
		return $this->dateEmprunt;
	}
	public function getDateRenduTH(): \DateTimeInterface{
		return $this->dateRenduTH;
	}
	public function getDateRenduEFF(){
		return $this->dateRenduEFF;
	}
	public function AjoutOeuvre(Oeuvre $oeuvre){
		array_push($this->listeOeuvre, $oeuvre);
	}
} 