<?php

require_once 'Car.php';

$ferrari = new Car;
$ferrari->brand = "Ferrari";
$ferrari->color = "Vermelha";
$ferrari->engine = 488;

$mustang = new Car;
$mustang->brand = "Mustange";
$mustang->color = "Amarelo";
$mustang->engine = 300;

echo $mustang->getEngine('hp');