<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'AppClient.php';
require_once 'UrAPP.php';
require_once 'vendor/autoload.php';

$client = new AppClient();

// Example usage: get records for registration code "ABC123"
try {
    $records = $client->getRecords("ABC123");
} catch (JsonException $e) {

}


foreach ($records as $record) {
    echo "Company name: {$record->getName()}\n";
    echo "Registration number: {$record->getRegNumber()}\n";
    echo "Address: {$record->getAddress()}\n";
    $date = substr($record->getRegDate(), 0, 10);
    echo "Registration date: $date\n\n";
}
