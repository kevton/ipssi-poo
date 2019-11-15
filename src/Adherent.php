<?php
namespace Ipssi\Evaluation;
use Ipssi\Evaluation\Emprunt;
class Adherent{
	private $nomAdherent;
	private $ListeEmprunt;
	public function __construct(string $nomAdherent, array $ListeEmprunt){
		$this->nomAdherent = $nomAdherent;
		$this->ListeEmprunt = $ListeEmprunt;
	}
	public function getNomAdherent(): string{
		return $this->nomAdherent;
	}
	public function getListeEmprunt(): array{
		return $this->ListeEmprunt;
	}
	public function AjoutEmprunt(Emprunt $Emprunt){
		array_push($this->ListeEmprunt, $Emprunt);
	}
}