<?php
// Cosmos DB endpoint and key
$endpoint = "https://wonderland.documents.azure.com:443/";
$primaryKey = "FYboYduDuC8WTxmSAX30xskFFTQSeKZYerby7hq6xY5l50E6iVEm2ZDMZoR9XVwKm5L8UTziyTfaACDbJhc1Xw==";
$databaseId = "wonderland";
$containerId = "table";

// Generate the Authorization header (You can use a library or write logic to generate it)
$authHeader = "GeneratedAuthHeader";  // Replace this with your logic to generate the header

// Prepare headers for the request
$headers = [
    "Authorization: $authHeader",
    "x-ms-date: " . gmdate('D, d M Y H:i:s T'),
    "x-ms-version: 2017-02-22",
    "Content-Type: application/json",
];

// Make a cURL request to fetch all documents
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint . "dbs/$databaseId/colls/$containerId/docs");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
curl_close($ch);

if ($response === false) {
    echo "Error: Unable to connect to Cosmos DB.";
} else {
    $data = json_decode($response, true);
    echo "<h1>Data from Cosmos DB:</h1>";
    echo "<pre>" . print_r($data, true) . "</pre>";
}
?>
