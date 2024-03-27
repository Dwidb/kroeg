<?php
// auteur: Dean
// functie: verwijder een bier op basis van de id
include 'config.php';

// Haal bier uit de database
if(isset($_GET['kroegcode'])){

    // test of insert gelukt is
    if(deletekroeg($_GET['kroegcode']) == true){
        echo '<script>alert("kroegcode: ' . $_GET['kroegcode'] . ' is verwijderd")</script>';
        echo "<script> location.replace('kroeg.php'); </script>";
    } else {
        echo '<script>alert("kroeg is NIET verwijderd")</script>';
    }
}
?>