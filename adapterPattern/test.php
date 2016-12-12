<?php
include_once('simplePizza.php');
include_once('pizzaAdapter.php');

define('BR','<'.'BR'.'>');
echo 'ADAPTER PATTERN:'.BR;
echo BR;

$pie = new simplePizza('Cheese','15');

$pizzaAdapter = new pizzaAdapter($pie);

echo 'Pie and Price: '.$pizzaAdapter->getPieAndPrice();

echo BR.BR;
echo 'END OF TEST'.BR;



?>
