<?php


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class AppClient {
    private $client;

    public function __construct() {
        $this->client = new Client(['verify' => false]);
    }

    public function getRecords($registrationCode) {
        $key = "&resource_id=25e80bf3-f107-4ab4-89ef-251b5b9374e9";
        $query = "q=$registrationCode";
        $url = "https://data.gov.lv/dati/lv/api/3/action/datastore_search?q=" . $query . $key;

        try {
            $response = $this->client->request('GET', $url);
        } catch (GuzzleException $e) {
            echo $e;
        }

        $responseData = json_decode($response->getBody()->getContents());

        if (!isset($responseData->result->records)) {
            throw new JsonException("Unexpected API response data: " . json_encode($responseData));
        }

        $records = [];
        foreach ($responseData->result->records as $record) {
            if ($record->regcode === $registrationCode) {
                $records[] = new Data(
                    $record->name,
                    $record->regcode,
                    $record->address,
                    $record->registered
                );
            }
        }

        return $records;
    }
}
