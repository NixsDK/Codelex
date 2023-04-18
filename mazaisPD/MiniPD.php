<?php
$url = "https://www.latvijasbanka.lv/vk/ecb.xml";

$xmlData = curl_init()
->setopt(CURLOPT_URL, $url)
->setopt(CURLOPT_RETURNTRANSFER, true)
->setopt(CURLOPT_SSL_VERIFYPEER, false)
->exec();

try {
$xml = new SimpleXMLElement($xmlData);
} catch (Exception $e) {
}

if (isset($argv[1]) && isset($argv[2])) {
$currency = strtoupper($argv[1]);
$amount = floatval($argv[2]);
$rate = null;
foreach ($xml->Cube->Cube->Cube as $c) {
if ($c['currency'] == $currency) {
$rate = (float)$c['rate'];
break;
}
}
if ($rate !== null) {
$converted = $amount * $rate;
echo "$amount EUR = $converted $currency\n";
} else {
echo "Invalid currency\n";
}
} else {
echo "Usage: php MiniPD.php <currency> <amount>\n";
        }

        curl_init()
        ->setopt(CURLOPT_URL, $url)
        ->setopt(CURLOPT_RETURNTRANSFER, true)
        ->setopt(CURLOPT_SSL_VERIFYPEER, false);
