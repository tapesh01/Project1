<?php

include_once('simplePizza.php');

class pizzaAdapter{
	private $pie;
	
	function __construct(simplePizza $pie_in){
	$this->pie = $pie_in;
	}

	function getPieDetails(){
		return $this->pie->getName().'by'.$this->book->getPrice();
		}
}

?>
