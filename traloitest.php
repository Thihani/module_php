<?php
include_once('functions.php'); // identique à include
global $ski_resorts; // "import" de la variable dans ce fichier

var_dump($_POST);
echo "<br>"."<br>";

foreach ($_POST['qt'] as $index => $quantity) {
    $ski_resort = $ski_resorts[$index];
    echo $ski_resort['name'] . ' : '. $quantity .'<br>';
    echo $ski_resort['skipass_price'] * $quantity. ' €';
    echo '<br>';
}