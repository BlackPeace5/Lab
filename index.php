<?php
class C {

}
class A extends C {
	public $obj4;
	public $obj5;
		public function __construct(C:$obj4, C:$obj5){
			$this->obj4=$obj4;
			$this->obj5=$obj5;
		}
}

class B extends A{
	public $obj2;
		public function __construct(C:$obj2, C:$obj4, C:$obj5){
			parent::__construct($obj4, $obj5);
			$this->obj2=$obj2;
		}
}



$obj5 = new class C();
$obj4 = new class C();
$obj3 = new class C();
$obj2 = new class C();
$obj6 = new class A($obj4, $obj5);
$obj1 = new class B($obj2, $obj3, $obj6);