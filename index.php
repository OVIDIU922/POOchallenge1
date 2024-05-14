<?php

require_once 'Car.php';

$car = new Car('gasoline', 'black', '');

echo $car->start();
echo 'démarrrage';
echo $car->forward();
echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Arret du véhicule: ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
