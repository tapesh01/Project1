<?php

include_once('hyundaiCarFactory.php');

echo tagins("html");
echo tagins("head");
echo tagins("/head");
echo tagins("body");

echo "BEGIN TESTING ABSTRACT FACTORY PATTERN";
echo tagins("br").tagins("br");

echo 'testing HyundaiCarFactory'.tagins("br");
$carFactoryInstance = new hyundaiCarFactory;
testCarFactory($carFactoryInstance);

echo tagins("br");
echo "END TESTING ABSTRACT FACTORY PATTERN";
echo tagins("br");

echo tagins("/body");
echo tagins("/html");

function testConcreteFactory($carFactoryInstance){

	$carOne = $carFactoryInstance->make


}


?>
