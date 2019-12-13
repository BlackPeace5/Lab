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

$square = new Square(null);
$roots = $square->solve(1, 2, 3);

MyLog::write();