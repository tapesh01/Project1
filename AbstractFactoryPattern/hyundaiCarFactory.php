<?php

include_once('abstractMyCar.php');

class abstractCar extends abstractMyCar {

private $make;
private $year;

function __construct(){
	$this->make = 'Genesis Coupe';
	$this->year = '2015';
}

function getMake(){return $this->make;}

function getYear(){return $this->year;}

}

?>
