<?php


class EnergyDrinks
{
    // Define the total number of customers surveyed
    private $total_customers = 12467;

    // Calculate the approximate number of customers who purchased one or more energy drinks per week
    public function getEnergyDrinkCustomers()
    {
        return round(0.14 * $this->total_customers);
    }

    // Calculate the approximate number of customers who prefer citrus flavored energy drinks
    public function getCitrusFlavoredCustomers()
    {
        $energy_drink_customers = $this->getEnergyDrinkCustomers();
        return round(0.64 * $energy_drink_customers);
    }
}


