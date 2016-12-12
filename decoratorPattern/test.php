<?php

include_once('soldier.php');
include_once('weaponDecorator.php');

echo tagins("html");
echo tagins("head");
echo tagins("/head");
echo tagins("body");

echo "BEGIN TESTING DECORATOR PATTERN";
echo tagins("br").tagins("br");

$patternSoldier = new soldier("Tapesh Nagarwal");

$decorator = new soldierWeaponDecorator($patternSoldier);

echo "showing soldier's weapon : ".tagins("br");
echo $decorator->showWeapon();
echo tagins("br").tagins("br");

echo "showing title after reset: ".tagins("br");
echo $decorator->resetWeapon();
echo $decorator->showWeapon();
echo tagins("br").tagins("br");

echo tagins("br");
echo "END TESITNG DECORATOR PATTER";
echo tagins("br");

echo tagins("/body");
echo tagins("/html");

functions tagins($stuffing){
	return("<".$stuffing.">";
	}


?>
