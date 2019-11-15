<?php
namespace Ipssi\Evaluation;
use Ipssi\Evaluation\Elements;
class Document{
	private $CouleurDoc;
	private $listeElementsTexte;
	private $listeElementsForme;
	private $listeElementsImage;
	public function __construct(
		string $CouleurDoc="blanc", 
		array $listeElementsTexte=array(),
		array $listeElementsForme=array(),
		array $listeElementsImage=array()
	){
		$this->CouleurDoc = $CouleurDoc;
		$this->listeElementsTexte = $listeElementsTexte;
		$this->listeElementsForme = $listeElementsForme;
		$this->listeElementsImage = $listeElementsImage;
	}
	public function getCouleurDoc(): string{
		return $this->CouleurDoc;
	}
	public function getLesListe(): array{
		$LesListes = [
			$this->listeElementsTexte,
			$this->listeElementsForme,
			$this->listeElementsImage
		];
		return $LesListes;
	}
	public function getListeTexte(): array{
		return $this->listeElementsTexte;
	}
	public function getListeForme(): array{
		return $this->listeElementsForme;
	}
	public function getListeImage(): array{
		return $this->listeElementsImage;
	}
	public function ajoutElementImage(Elements $elementImage){
		array_push($listeElementsImage, $elementImage);
	}
	public function ajoutElementForme(Elements $elementForme){
		array_push($listeElementsForme, $elementForme);
	}
	public function ajoutElementTexte(Elements $elementTexte){
		array_push($listeElementsTexte, $elementTexte);
	}
	public function getDetail(): array{
		$detailComplet = [
			'couleur' => $this->CouleurDoc,
			'Elements' => $this->listeElements];
		return $detailComplet;
	}
} 