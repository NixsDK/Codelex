<?php

class FuelGauge
{
    private $currentFuel;

    public function __construct()
    {
        $this->currentFuel = 0;
    }

    public function reportFuel()
    {
        return $this->currentFuel;
    }

    public function incrementFuel()
    {
        if ($this->currentFuel < 70) {
            $this->currentFuel++;
        }
    }

    public function decrementFuel()
    {
        if ($this->currentFuel > 0) {
            $this->currentFuel--;
        }
    }
}
