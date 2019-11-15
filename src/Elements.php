<?php
namespace Ipssi\Evaluation;
use Ipssi\Evaluation\Elements;
abstract class Elements{
	protected $coordX;
	protected $coordY;
	public function __construct(
		int $coordX, 
		int $coordY
	){
		$this->coordX = $coordX;
		$this->coordY = $coordY;
	}
	public function getCoordX(): int{
		return $this->coordX;
	}
	public function getCoordY(): int{
		return $this->coordY;
	}
	public function getCoord(): array{
		$coord = [$this->coordX, $this->coordY];
		return $coord;
	}
} 