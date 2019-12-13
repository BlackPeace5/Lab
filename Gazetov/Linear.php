<?php
namespace gazetov;
class Linear {
	
	protected $x = array();
	
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
				$this->x =($b * (-1))/$a;
				return $this->x; 
			}
	}
}

