<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
$endpoint = "https://<your-account>.documents.azure.com:443/"; // Replace with your Cosmos DB endpoint
$primaryKey = "FYboYduDuC8WTxmSAX30xskFFTQSeKZYerby7hq6xY5l50E6iVEm2ZDMZoR9XVwKm5L8UTziyTfaACDbJhc1Xw=="; // Replace with your primary key
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

// Make a cURL request to fetch documents
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint . "dbs/$databaseId/colls/$containerId/docs");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo "Error: " . curl_error($ch); // Display cURL error
} else {
    $data = json_decode($response, true);

    // Display the raw response
    echo "<h1>Raw Response:</h1>";
    echo "<pre>" . htmlspecialchars($response) . "</pre>";

    // Display parsed data
    echo "<h1>Data from Cosmos DB:</h1>";
    echo "<pre>" . print_r($data, true) . "</pre>";
}

// Close cURL
curl_close($ch);

// Debugging information
echo "<h2>Debugging Information</h2>";
echo "<h3>String-to-Sign:</h3><pre>" . htmlspecialchars(strtolower($verb) . "\n" .
    strtolower($resourceType) . "\n" .
    $resourceLink . "\n" .
    strtolower($date) . "\n\n") . "</pre>";
echo "<h3>Authorization Header:</h3><pre>" . htmlspecialchars($authHeader) . "</pre>";
?>
