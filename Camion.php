<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',

    ];

    private string $energy;
    private int $energyLevel;
    private int $storageCapacity;
    private int $load = 0;
    private int $speedLoading;

    public function __construct(string $color, int $nbSeats, int $nbWheels, string $energy, int $storageCapacity, int $speedLoading)
    {
        parent::__construct($color, $nbSeats, $nbWheels);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
        $this->speedLoading = $speedLoading;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

 public function setEnergy(string $energy): Truck
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
        if ($storageCapacity < 0) {
            $storageCapacity = 0;
        }
    }
      
    public function getLoad(): int
    {
        return $this->load;
        
    }
    
    public function setLoad(int $load): void
    {
        $this->load = $load;
        if ($load > $storageCapacity){
            $load = $storageCapacity;
        }

        if ($load < 0)
        {
            $load = 0;
        }
    }

    public function getSpeedLoading(): int
    {
        return $this->speedLoading;
    }

    public function setSpeedLoading(int $speedLoading): void
    {
        $this->speedLoading = $speedLoading;
    }

    //loading methods
    public function loading() {
        while ($this->load != $this->storageCapacity) {

            
            $this->load += $this->speedLoading;

            if ($this->load > $this->storageCapacity) {
                $this->load = $this->storageCapacity;
            }
         echo"chargement à " . $this->load . " in filling<br>";
        }
         if ($this->load = $this->storageCapacity) {
            echo "Full";
         }
        }
     
        public function forward(): string

        {
    
            $this->currentSpeed = 15;
    
            return "Go !";
    
        }
    
    
        public function brake(): string
    
        {
    
            $sentence = "";
    
            while ($this->currentSpeed > 0) {
    
                $this->currentSpeed--;
    
                $sentence .= "Brake !!!";
    
            }
    
    
            $sentence .= "I'm stopped !";
    
            return $sentence;
    
        }

}