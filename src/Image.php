<?php
namespace Ipssi\Evaluation;
use Ipssi\Evaluation\Elements;
class Image extends Elements{
	private $nomImage;
	public function __construct(
		int $coordX, 
		int $coordY,
		string $nomImage
	){
		parent::__construct($coordX, $coordY);
		$this->nomImage = $nomImage;
	}
	public function getnomImage(): string{
		return $this->nomImage;
	}
} 