<?php
require_once 'FuelGauge.php';
require_once 'Odometer.php';

$fuelGauge = new FuelGauge();

for ($i = 0; $i < 70; $i++) {
    $fuelGauge->incrementFuel();
}

$odometer = new Odometer($fuelGauge);

$odometer->drive();
