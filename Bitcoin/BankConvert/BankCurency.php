<?php

// Define the base currency and the amount to convert
$base_currency = "EUR";
$amount = 100;

// Get the currency to convert to from user input
echo "Enter the currency to convert to (e.g. USD): ";
$convert_to = trim(fgets(STDIN));

// Load the exchange rate data from the URL
$exchange_rates = simplexml_load_file("https://www.latvijasbanka.lv/vk/ecb.xml");

// Initialize the conversion rate to 1 by default
$conversion_rate = 1;

// Loop through the exchange rate data to find the rate for the desired currency
if ($exchange_rates !== false) {
    foreach ($exchange_rates->Cube->Cube as $rate) {
        if ($rate["currency"] == $convert_to) {
            // Set the conversion rate to the rate for the desired currency
            $conversion_rate = (float) $rate["rate"];

            // Break out of the loop once the rate is found
            break;
        }
    }
} else {
    echo "Failed to load exchange rate data.\n";
}

// Calculate the converted amount by multiplying the amount by the conversion rate
$converted_amount = $amount * $conversion_rate;

// Display the result
printf("%.2f %s is equal to %.2f %s\n", $amount, $base_currency, $converted_amount, $convert_to);

?>
