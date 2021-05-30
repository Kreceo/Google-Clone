<?php

require(dirname($_SERVER['DOCUMENT_ROOT'], 1) . '/vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(dirname($_SERVER['DOCUMENT_ROOT'], 1));
$dotenv->load();

$username = $_ENV['USERNAME'];
$password = $_ENV['PASSWORD'];
$database = $_ENV['DATABASE'];
$host = $_ENV['HOST'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
