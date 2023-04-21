<?php

// CoinMarketCap API Key
$apiKey = 'c06dc985-f5aa-4e1a-85d4-8bf4049805cf';

// Function to get the top 10 cryptocurrencies
function getTop10Cryptocurrencies($apiKey)
{
    $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
    $queryParams = '?limit=10&sort=market_cap&start=1';

    // Initialize cURL
    $ch = curl_init();

    // Set cURL options
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url . $queryParams,
        CURLOPT_HTTPHEADER => array('X-CMC_PRO_API_KEY: ' . $apiKey),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_CAINFO => 'C:\Program Files (x86)\PHP\php-8.2.3-Win32-vs16-x64\cacert-2023-01-10.pem'
    ));

    // Execute the request
    $response = curl_exec($ch);

    // Close cURL
    curl_close($ch);

    // Decode JSON response
    $responseJSON = json_decode($response, true);

    // Check if the response contains the data key
    if (isset($responseJSON['data']) && is_array($responseJSON['data'])) {
        // Return top 10 cryptocurrencies
        return $responseJSON['data'];
    } else {
        // Return an empty array if the data key is not present or invalid
        return [];
    }
}

// Get top 10 cryptocurrencies
$top10Cryptos = getTop10Cryptocurrencies($apiKey);

// Display top 10 cryptocurrencies
foreach ($top10Cryptos as $crypto) {
    echo 'Name: ' . $crypto['name'] . PHP_EOL;
    echo 'Symbol: ' . $crypto['symbol'] . PHP_EOL;
    echo 'Price: $' . $crypto['quote']['USD']['price'] . PHP_EOL;
    echo 'Market Cap: $' . $crypto['quote']['USD']['market_cap'] . PHP_EOL;
    echo 'Volume (24h): $' . $crypto['quote']['USD']['volume_24h'] . PHP_EOL;
    echo 'Percent Change (24h): ' . $crypto['quote']['USD']['percent_change_24h'] . '%' . PHP_EOL;
    echo '-----------------------' . PHP_EOL;
}

?>
