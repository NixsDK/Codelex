<?php
require_once 'FuelGauge.php';

class Odometer
{
    private $currentMileage;
    private $fuelGauge;

    public function __construct(FuelGauge $fuelGauge)
    {
        $this->currentMileage = 0;
        $this->fuelGauge = $fuelGauge;
    }

    public function reportMileage()
    {
        return $this->currentMileage;
    }

    public function incrementMileage()
    {
        if ($this->currentMileage < 999999) {
            $this->currentMileage++;
        } else {
            $this->currentMileage = 0;
        }
    }

    public function decrementFuel()
    {
        $this->fuelGauge->decrementFuel();
    }

    public function drive()
    {
        while ($this->fuelGauge->reportFuel() > 0) {
            if ($this->currentMileage % 10 == 0) {
                $this->decrementFuel();
            }
            $this->incrementMileage();
            echo "Mileage: " . $this->reportMileage() . " Fuel: " . $this->fuelGauge->reportFuel() . "\n";
        }
        echo "Out of fuel!\n";
    }
}
