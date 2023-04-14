<?php
require_once 'Video.php';
require_once 'VideoStore.php';

$store = new VideoStore();

// Add videos to the store
$store->addVideo("The Matrix");
$store->addVideo("Godfather II");
$store->addVideo("Star Wars Episode IV: A New Hope");

// Give ratings to each video
$store->rateVideo("The Matrix", 4);
$store->rateVideo("The Matrix", 5);
$store->rateVideo("The Matrix", 3);
$store->rateVideo("Godfather II", 5);
$store->rateVideo("Godfather II", 4);
$store->rateVideo("Star Wars Episode IV: A New Hope", 4);

// Rent each video out once and return it
$store->checkOutVideo("The Matrix");
$store->returnVideo("The Matrix");

$store->checkOutVideo("Godfather II");
$store->returnVideo("Godfather II");

$store->checkOutVideo("Star Wars Episode IV: A New Hope");
$store->returnVideo("Star Wars Episode IV: A New Hope");

// List the inventory after "Godfather II" has been rented out
echo "Inventory after Godfather II has been rented out:\n";
$store->listInventory();
