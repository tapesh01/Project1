<?php

class simplePizza{

	private $name;
	private $price;
	
	function __construct($nameOfPie, $priceOfPie){
		$this->name = $nameOfPie;
		$this->price = $priceOfPie;
	}
	
	function getName(){return $this->name;}
	function getPrice(){return $this->price;}
}



?>
