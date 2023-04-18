<?php

// API endpoint URL
$url = "http://api.openweathermap.org/data/2.5/weather";

// Your API key
$apiKey = "5517851990dff1de57056b52c4d19c18";

// Get the user's input of country and city name
echo "Enter country and city name (e.g. Latvia Riga): ";
$location = trim(fgets(STDIN));

// Split the input into country and city name
list($city, $country) = array_map('trim', explode(' ', $location));

// Make the API request
$response = file_get_contents("$url?q=$city,$country&appid=$apiKey&units=metric");

// Parse the JSON response into a PHP array
$data = json_decode($response, true);

// Check if the API returned an error
if ($data["cod"] != 200) {
    echo "Error: " . $data["message"];
    exit;
}

// Display the weather information
echo "Current weather in " . $data["name"] . ", " . $data["sys"]["country"] . ":\n";
echo "Temperature: " . $data["main"]["temp"] . "°C\n";
echo "Weather description: " . $data["weather"][0]["description"] . "\n";
echo "Humidity: " . $data["main"]["humidity"] . "%\n";
echo "Wind speed: " . $data["wind"]["speed"] . " m/s\n";
