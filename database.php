<?php
$endpoint = "https://wonderland.documents.azure.com:443/";
$primaryKey = "FYboYduDuC8WTxmSAX30xskFFTQSeKZYerby7hq6xY5l50E6iVEm2ZDMZoR9XVwKm5L8UTziyTfaACDbJhc1Xw==";
$databaseId = "wonderland";
$containerId = "table";

// Request details
$verb = "GET";
$resourceType = "dbs";
$resourceLink = "dbs/$databaseId/colls/$containerId";
$date = gmdate('D, d M Y H:i:s T');

// Generate the Authorization header
$authHeader = generateAuthHeader($verb, $resourceType, $resourceLink, $date, $primaryKey);

// Prepare headers
$headers = [
    "Authorization: $authHeader",
    "x-ms-date: $date",
    "x-ms-version: 2017-02-22",
    "Content-Type: application/json",
];

// Make a cURL request to test the connection
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint . "dbs/$databaseId/colls/$containerId/docs");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
if ($response === false) {
    echo "Error: " . curl_error($ch);
} else {
    $data = json_decode($response, true);
    echo "<h1>Data from Cosmos DB:</h1>";
    echo "<pre>" . print_r($data, true) . "</pre>";
}
curl_close($ch);

// Authorization header generation function
function generateAuthHeader($verb, $resourceType, $resourceLink, $date, $masterKey) {
    $key = base64_decode($masterKey);
    $resourceLink = strtolower($resourceLink);
    $stringToSign = strtolower($verb) . "\n" .
                    $resourceType . "\n" .
                    $resourceLink . "\n" .
                    strtolower($date) . "\n\n";

    $hash = hash_hmac('sha256', $stringToSign, $key, true);
    $signature = base64_encode($hash);

    return 'type=master&ver=1.0&sig=' . $signature;
}
?>
