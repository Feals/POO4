<?php
require_once 'HighWay.php';

class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
    parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle) : ?Vehicle
    { $currentVehicles = $this->getCurrentVehicles();
      $currentVehicles[] = $vehicle;
    return   $this->setCurrentVehicles($currentVehicles);   
    }
}
