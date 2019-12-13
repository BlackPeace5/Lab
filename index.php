<?php
// Линейное уравнение a*x + b = 0
class Linear {
	
	protected $x;
	
	public function __construct($result = null) {
		$this->x = $result; 
	}
		
	public function getX() {
		return $this->x;
	}
		
	public function setX($num) {
		$this->x = $num;
	}
		
	public function linearEquation($a, $b) {
		if($a != 0){
			$this->x = ($b * (-1))/$a;
			return $this->x; 
		} else {
			return false;
		}
	}
}

// Квадратное уравнение ax^2+bx+c
class Square extends Linear {
	
		public function __construct($x){
			parent::__construct($x);
		}
		//Добавить решение линейного уравнения, если а = 0
		// Нахождение дискириминанта
		protected function findDisc($a, $b, $c){
		    return ($b * $b) - 4 * $a * $c;
		}
		
		// Нахождение корней уравнения
		public function discEquation($a, $b, $c) {
		    if($a != 0){
				$disc = $this->findDisc($a, $b, $c);

				if($disc > 0) {
					$x1 = ($b * (-1) + sqrt($disc))/(2 * $a);
					$x2 = ($b * (-1) - sqrt($disc))/(2 * $a);
					$this->x = Array($x1, $x2);
				} elseif($disc == 0) {
					$this->x = ($b * (-1))/(2 * $a);
				} else {
					$this->x = false;
				}
			
				return $this->x;
			} else{
				$this->linearEquation($a, $b);
			}   
		}
}
/*
class B extends A {

}
*/
$lineareq = new Linear();
$lineareq->linearEquation(3, 9);

$sqrteq = new Square(null);
$sqrteq->discEquation(0,6,9);