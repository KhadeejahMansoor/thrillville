<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

function getAuthHeader($verb, $resourceType, $resourceLink, $date, $masterKey) {
    $key = base64_decode($masterKey);
    $stringToSign = strtolower($verb) . "\n" .
                    strtolower($resourceType) . "\n" .
                    $resourceLink . "\n" .
                    strtolower($date) . "\n\n";

    $hash = hash_hmac('sha256', $stringToSign, $key, true);
    $signature = base64_encode($hash);

    return 'type=master&ver=1.0&sig=' . $signature;
}

// Cosmos DB connection details
$uri = "https://wonderland.documents.azure.com:443/";
$masterKey = "FYboYduDuC8WTxmSAX30xskFFTQSeKZYerby7hq6xY5l50E6iVEm2ZDMZoR9XVwKm5L8UTziyTfaACDbJhc1Xw==";
$databaseId = "wonderland";
$collectionId = "tables";

$client = new Client([
    'base_uri' => $uri,
    'headers' => [
        'Accept' => 'application/json',
        'x-ms-version' => '2018-12-31',
    ],
]);

// Query the database
try {
    $verb = 'POST';
    $resourceType = 'docs';
    $resourceLink = "dbs/{$databaseId}/colls/{$collectionId}";
    $date = gmdate('D, d M Y H:i:s T');

    $authHeader = getAuthHeader($verb, $resourceType, $resourceLink, $date, $masterKey);

    $query = [
        'query' => 'SELECT * FROM c WHERE c.property = @value',
        'parameters' => [
            ['name' => '@value', 'value' => 'some-value']
        ]
    ];

    $response = $client->request($verb, $resourceLink, [
        'headers' => [
            'Authorization' => $authHeader,
            'x-ms-date' => $date,
            'Content-Type' => 'application/query+json',
        ],
        'body' => json_encode($query),
    ]);

    $data = json_decode($response->getBody(), true);
    print_r($data);

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
