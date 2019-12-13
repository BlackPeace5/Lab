<?php
namespace gazetov;

use core\EquationInterface;

Class Square extends Linear implements EquationInterface {
	
	protected function findDisc($a, $b, $c){

		return ($b * $b) - 4 * $a * $c;
	}
		
	public function solve($a, $b, $c) {
		    if($a != 0){   
				$disc = $this->findDisc($a, $b, $c);

				if($disc > 0) {
					$this->x=array( 
					($b * (-1) + sqrt($disc))/(2 * $a), 
					($b * (-1) - sqrt($disc))/(2 * $a)
					);
					return $this->x; 
				} elseif($disc == 0) {
					$this->x=array(
					($b * (-1))/(2 * $a)
					);
					return $this->x;
				}
			} 
			return $this->linearEquation($a, $b);
		}	
}