<?php

require_once 'HighWay.php';
class MotorWay extends HighWay
{
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
    parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle) : ?Vehicle
    {
        if (!$vehicle instanceof Bicycle && !$vehicle instanceof Skateboard) {
            $currentVehicles = $this->getCurrentVehicles();
            $currentVehicles[] = $vehicle;
          return $this->setCurrentVehicles($currentVehicles);
       }
        else return null;
    }
}