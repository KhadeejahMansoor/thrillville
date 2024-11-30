<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

// Function to get the Authorization header for Cosmos DB requests
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

// Cosmos DB connection details from environment variables
$uri = getenv('COSMOS_DB_ENDPOINT'); // Get the endpoint from environment variable
$masterKey = getenv('COSMOS_DB_KEY'); // Get the master key from environment variable
$databaseId = getenv('COSMOS_DB_DATABASE'); // Get the database ID from environment variable
$collectionId = getenv('COSMOS_DB_COLLECTION'); // Get the collection ID from environment variable

// Initialize the client with the base URI (Cosmos DB endpoint)
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

// Function to insert a document into Cosmos DB
function insertDocument($client, $databaseId, $collectionId, $masterKey, $document) {
    $verb = 'POST';
    $resourceType = 'docs';
    $resourceLink = "dbs/{$databaseId}/colls/{$collectionId}";
    $date = gmdate('D, d M Y H:i:s T');

    $authHeader = getAuthHeader($verb, $resourceType, $resourceLink, $date, $masterKey);

    try {
        $response = $client->request($verb, $resourceLink, [
            'headers' => [
                'Authorization' => $authHeader,
                'x-ms-date' => $date,
                'Content-Type' => 'application/json',
            ],
            'body' => json_encode($document),
        ]);

        echo "Document inserted: " . $response->getBody() . "\n";
    } catch (Exception $e) {
        echo 'Error inserting document: ' . $e->getMessage() . "\n";
    }
}

// Document to insert
$document = [
    'id' => 'unique-id-123', // Unique ID for the document
    'name' => 'Example Name',
    'property' => 'some-value',
    'additional_field' => 'example-data'
];

// Insert the document
insertDocument($client, $databaseId, $collectionId, $masterKey, $document);

?>
