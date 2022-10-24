<?php


require_once 'Car.php';

$car = new Car('green', 4, 4,'electric');
var_dump($car);

try {

     $car->start() . PHP_EOL;
  
 } catch(Exception $e){
 
     // code to manage exceptions
 
     echo 'Exception received : <br> ' . $e->getMessage() . PHP_EOL;
     $car->setParkBrake();
 } finally {
 
     echo "Ma voiture roule comme un donut !" . PHP_EOL;
 
 };



var_dump($car);

try {

     $car->start() . PHP_EOL;
  
 } catch(Exception $e){
 
     // code to manage exceptions
 
     echo 'Exception received : <br> ' . $e->getMessage() . PHP_EOL;
 
 } finally {
 
     echo "Ma voiture roule comme un donut !" . PHP_EOL;
 
 }