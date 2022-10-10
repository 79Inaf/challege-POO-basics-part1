<?php

require_once 'Bicycle.php';

$bike = new Bicycle('red');

var_dump($bike);

$bike->setCurrentSpeed(0);

var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo "<br><br>";

$rockrider = new Bicycle('yellow');

echo $rockrider->forward();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $rockrider->brake();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $rockrider->brake();
echo "<br><br>";

$tornado = new Bicycle('black');

echo $tornado->forward();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();
echo "<br><br>";


require_once 'Car.php';

$margeCar = new Car('orange', 5, 'gasoil');

var_dump($margeCar);

echo '<br>' . $margeCar->start();
echo '<br>';
echo $margeCar->forward() . ' km/h';
echo '<br>';
echo $margeCar->brake() . '<br>';

$homerCar = new Car('green', 2, 'gasoil');
echo '<br>' . $homerCar->start();
echo '<br>';
echo $homerCar->forward() . ' km/h';
echo '<br>';
echo $homerCar->brake() . '<br>';

