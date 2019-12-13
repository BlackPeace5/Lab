<?php

ini_set("display_errors", 1); error_reporting (-1); 
use gazetov\GazetovException;
use gazetov\MyLog;
use gazetov\Linear;
use gazetov\Square;


include 'core/EquationInterface.php';
include 'core/LogInterface.php';
include 'core/LogAbstract.php';
include 'gazetov/GazetovException.php';
include 'gazetov/MyLog.php';
include 'gazetov/Linear.php';
include 'gazetov/Square.php';



	try{
		echo 'Enter a, b, c' . "\n";
		$num = [];
		for($i = 0; $i < 3; $i++){
		$num[$i] = readline("Value = ");	
		}
		if($num[0] != 0){
		MyLog::log("Vvedeno uravneniye: " . $num[0] . "x^2 + " . $num[1] . "x + " . $num[2] . " = 0");
		} else {
		MyLog::log("Vvedeno uravneniye: " . $num[0] . "x + " . $num[1] . " = 0");
		}

		$square = new Square(null);
		$roots = $square->solve($num[0], $num[1], $num[2]);

		if ($roots != false) {
			MyLog::log("Korni uravneniye: " . implode(",", $roots) . "\n");
		}
	} catch(GazetovException $e) {
		MyLog::log($e->getMessage());
	}

MyLog::write();