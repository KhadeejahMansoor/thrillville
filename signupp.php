<?php
require 'vendor/autoload.php'; // Include Composer's autoloader

use MicrosoftAzure\Storage\Table\TableRestProxy;
use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;
use MicrosoftAzure\Storage\Table\Models\Entity;
use MicrosoftAzure\Storage\Table\Models\EdmType;

// Connection string for your Azure Cosmos DB account with Table API
$connectionString = "DefaultEndpointsProtocol=https;AccountName=<your_account_name>;AccountKey=<your_account_key>;TableEndpoint=<your_table_endpoint>";

$tableClient = TableRestProxy::createTableService($connectionString);

$tableName = "SignUp";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values and sanitize them
    $first_name = htmlspecialchars($_POST['input-fn']);
    $last_name = htmlspecialchars($_POST['input-ln']);
    $address = htmlspecialchars($_POST['input-add']);
    $email = htmlspecialchars($_POST['input-email']);
    $password = password_hash($_POST['input-password'], PASSWORD_DEFAULT);
    $contact = htmlspecialchars($_POST['input-contact']);

    // Create a new entity
    $entity = new Entity();
    $entity->setPartitionKey("Users");
    $entity->setRowKey($email); // Using email as a unique identifier
    $entity->addProperty("FirstName", EdmType::STRING, $first_name);
    $entity->addProperty("LastName", EdmType::STRING, $last_name);
    $entity->addProperty("Address", EdmType::STRING, $address);
    $entity->addProperty("Password", EdmType::STRING, $password);
    $entity->addProperty("Contact", EdmType::STRING, $contact);

    try {
        // Insert the entity into the table
        $tableClient->insertEntity($tableName, $entity);
        echo "User registered successfully!";
    } catch (ServiceException $e) {
        $code = $e->getCode();
        $error_message = $e->getMessage();
        echo "Error: $code - $error_message";
    }
}
?>
