<?php

private $name;
private $weapon;

function __construct($name_in, $weapon_in){
	$this->name = $name_in;
	$this->weapon = $weapon_in;
}

function getName(){return $this->name;}

function getWeapon(){return $this->weapon;}

function getNameAndWeapon(){
	$this->getName.'by'.$this->getWeapons();
}


?>
