<?php
// Database configuratie
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "bieren");

// PDO databaseverbinding aanmaken
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    // Stel PDO in op foutmodus uitzondering om uitzonderingen te kunnen afvangen
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Als er een fout optreedt, toon dan een foutbericht
    die("Database connection failed: " . $e->getMessage());
}

try {
    // Query om alleen de kolommen naam, adres, plaats en kroegcode op te halen uit de kroegtabel
    $stmt = $pdo->query("SELECT naam, adres, plaats, kroegcode FROM kroeg");

    // Controleren of er rijen zijn gevonden
    if ($stmt->rowCount() > 0) {
        // Door de resultaten itereren en elke rij afdrukken
        echo "<table border='1'>";
        echo "<tr><th>Naam</th><th>Adres</th><th>Plaats</th><th>Kroegcode</th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['naam'] . "</td>";
            echo "<td>" . $row['adres'] . "</td>";
            echo "<td>" . $row['plaats'] . "</td>";
            echo "<td>" . $row['kroegcode'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Geen resultaten gevonden in de kroegtabel.";
    }
} catch(PDOException $e) {
    // Afhandeling van fouten
    echo "Error: " . $e->getMessage();
}
?>
