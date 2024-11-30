<?php
// Function to generate the Authorization header
function generateAuthHeader($verb, $resourceType, $resourceLink, $date, $masterKey) {
    $key = base64_decode($masterKey); // Decode the primary key
    $stringToSign = strtolower($verb) . "\n" .
                    strtolower($resourceType) . "\n" .
                    $resourceLink . "\n" .
                    strtolower($date) . "\n\n";

    $hash = hash_hmac('sha256', $stringToSign, $key, true); // HMAC with SHA256
    $signature = base64_encode($hash); // Encode the hash as base64

    return "type=master&ver=1.0&sig=" . $signature;
}

// Cosmos DB configuration
$endpoint = "https://<your-account>.documents.azure.com:443/";
$primaryKey = "FYboYduDuC8WTxmSAX30xskFFTQSeKZYerby7hq6xY5l50E6iVEm2ZDMZoR9XVwKm5L8UTziyTfaACDbJhc1Xw==";
$databaseId = "wonderland";
$containerId = "table";

// Request details
$verb = "GET";
$resourceType = "docs";
$resourceLink = "dbs/$databaseId/colls/$containerId";
$date = gmdate('D, d M Y H:i:s T'); // Current UTC time in required format

// Generate the Authorization header
$authHeader = generateAuthHeader($verb, $resourceType, $resourceLink, $date, $primaryKey);

// Prepare headers
$headers = [
    "Authorization: $authHeader",
    "x-ms-date: $date",
    "x-ms-version: 2017-02-22",
    "Content-Type: application/json",
];

// Make a cURL request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint . "dbs/$databaseId/colls/$containerId/docs");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
if ($response === false) {
    echo "Error: " . curl_error($ch);
} else {
    echo "<h1>Data from Cosmos DB:</h1>";
    echo "<pre>" . htmlspecialchars($response) . "</pre>";
}
curl_close($ch);
?>
