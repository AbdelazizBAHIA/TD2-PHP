<html>
<head>
    <title>Welcome to my excellent blogs</title>
</head>
<body>
    <img src='storage/my-excellent-blog.png'>
    <h1>Welcome to my excellent blog - by @abdelaziz</h1>

<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

var_dump($_ENV);
$dbserver   = $_ENV['DB_SERVER'];
$dbport     = $_ENV['DB_PORT'];
$dbuser     = $_ENV['DB_USER'];
$dbpassword = $_ENV['DB_PASSWORD'];
$dbname     = $_ENV['DB_NAME'];

try {
    $conn = new PDO("mysql:host=$dbserver;port=$dbport;dbname=$dbname", $dbuser, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p style='color:green;'> Connected successfully</p>";
} catch(PDOException $e) {
    echo "<p style='color:red;'> Database connection failed: " . $e->getMessage() . "</p>";
}

?>

</body>
<html>
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

var_dump($_ENV);
