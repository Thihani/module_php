<?php
include_once('functions.php'); // identique à include
global $ski_resorts; // "import" de la variable dans ce fichier

var_dump($_POST);
echo "<br>"."<br>";

$checked_resorts_index = $_POST['check']; // récupération des index

foreach ($checked_resorts_index as $key) {
     $ski_resort = $ski_resorts[$key];
    echo $ski_resort['skipass_price'] . '<br>';
}