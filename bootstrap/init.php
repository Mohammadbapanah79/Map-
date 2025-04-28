<?php
session_start();
include "constants.php";
include BASE_PATH . "/bootstrap/config.php";
include BASE_PATH . "/vendor/autoload.php";
include BASE_PATH . "/libs/helpers.php";
$dsn = "mysql:host={$database_config->host};dbname={$database_config->db}";
try {
    $pdo = new PDO($dsn, $database_config->user, $database_config->password);
} catch (PDOException $e) {
    diePage("Connection Failed : " . $e->getMessage());
}

//echo "Connected successfully";
include BASE_PATH . "libs/lib-users.php";
include BASE_PATH . "libs/lib-locations.php";
