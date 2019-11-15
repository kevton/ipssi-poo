<?php
namespace Ipssi\Evaluation;
class Oeuvre{
	private $NomOeuvre;
	private $QuantiteOeuvre;
	public function __construct(str $NomOeuvre, int $QuantiteOeuvre){
		$this->NomOeuvre = $NomOeuvre;
		$this->QuantiteOeuvre = $QuantiteOeuvre;
	}
	public function EmpruntOeuvre(){
		$nb_Oeuvre_Avant_Emprunt = $this->QuantiteOeuvre;
		$this->QuantiteOeuvre = $nb_Oeuvre_Avant_Emprunt-1;
	}
	public function RenduOeuvre(){
		$nb_Oeuvre_Avant_Rendu = $this->QuantiteOeuvre;
		$this->QuantiteOeuvre = $nb_Oeuvre_Avant_Rendu+1;
	}
	public function getNomOeuvre(): string{
		return $this->NomOeuvre;
	}
	public function getQuantiteOeuvre(): int{
		return $this->QuantiteOeuvre;
	}
} 