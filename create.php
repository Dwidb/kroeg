<?php
// Database configuratie
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "bieren");

// Verbinding maken met de database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Controleren op connectiefouten
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
