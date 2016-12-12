<?php

include_once('soldier.php');

protected $soldier;
protected $weapon;

public function __construct(soldier $soldier_in){
	$this->soldier = $soldier_in;
	$this->resetweapon();
}

function resetWeapon){
	$this->title = $this->soldier->getWeapon();
}

function showWeapon(){
	return $this-weapon;
}



?>
