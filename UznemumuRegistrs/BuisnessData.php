<?php
require_once '../vendor/autoload.php';
require "ApiClient.php";
require "Data.php";

class BusinessData {
    private $apiClient;

    public function __construct($apiClient) {
        $this->apiClient = $apiClient;
    }

    public function run() {
        $query = readline('Enter registration number: ');

        // Validate user input
        if (!$this->validateInput($query)) {
            echo 'Invalid input. Please enter a valid registration number.' . PHP_EOL;
            return;
        }

        $records = $this->apiClient->getRecords($query);

        // Handle no results
        if (!$records) {
            echo 'No results found.' . PHP_EOL;
            return;
        }

        $this->displayRecords($records);
    }

    private function validateInput($input) {
        // TODO: Implement validation logic
        return true;
    }

    private function displayRecords($records) {
        // TODO: Implement formatting logic
        foreach ($records as $record) {
            echo "Company name: {$record->getName()}\n";
            echo "Registration number: {$record->getRegNumber()}\n";
            echo "Address: {$record->getAddress()}\n";
            $date = substr($record->getRegDate(), 0, 10);
            echo "Registration date: $date\n\n";
        }
    }
}

$apiClient = new ApiClient();
$app = new BusinessData($apiClient);
$app->run();
