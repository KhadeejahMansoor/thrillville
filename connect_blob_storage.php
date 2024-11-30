<?php
require 'vendor/autoload.php';

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;

// Azure Blob Storage connection string
$connectionString = "DefaultEndpointsProtocol=https;AccountName=blobstoreaccount123;AccountKey=94GArW3Laxtn/PxJQj7m/WtnJvFOvc2xSvsX2c3B+FyfhK1tgWdOiEFPG1DIBsl1MbVTfabFsGxu+AStCzfoSw==;EndpointSuffix=core.windows.net";

// Container name
$containerName = "blobstorageaccountnew";

// Name of the image to fetch (e.g., "example.jpg")
$blobName = "i-1.jpg";

try {
    // Create Blob service client
    $blobClient = BlobRestProxy::createBlobService($connectionString);

    // Get Blob URL (public URL)
    $blobUrl = "https://blobstoreaccount123.blob.core.windows.net/blobstorageaccountnew/i-1.jpg";

    // Test the URL
    $headers = get_headers($blobUrl);
    if (strpos($headers[0], "200 OK") === false) {
        die("Error: Blob does not exist or is not publicly accessible.");
    }

    // Display the image on the webpage
    echo "<h1>Azure Blob Image</h1>";
    echo "<img src='$blobUrl' alt='Blob Image' style='max-width:100%; height:auto;'>";
    echo "<p>Image URL: <a href='$blobUrl' target='_blank'>$blobUrl</a></p>";
} catch (ServiceException $e) {
    echo "Error: " . $e->getMessage();
}
?>
