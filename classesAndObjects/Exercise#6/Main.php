<?php


require_once 'EnergyDrinks.php';

class Main
{
    public static function run()
    {
        // Create an instance of the EnergyDrinks class
        $energy_drinks = new EnergyDrinks();

        // Display the results
        echo "Approximate number of customers who purchased one or more energy drinks per week: " . $energy_drinks->getEnergyDrinkCustomers() . "<br>";
        echo "Approximate number of customers who prefer citrus flavored energy drinks: " . $energy_drinks->getCitrusFlavoredCustomers();
    }
}

Main::run();


