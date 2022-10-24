<?php

require_once 'HighWay.php';
final class PedestrianWay extends HighWay
{
    public function __construct()
    {
    parent::__construct(1, 10);
    }

    public function addVehicle(Vehicle $vehicle) : ?Vehicle
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $currentVehicles = $this->getCurrentVehicles();
            $currentVehicles[] = $vehicle;
            return   $this->setCurrentVehicles($currentVehicles); 
        }
        else return null;
        
    }
}