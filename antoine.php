<?php

$guitare = array('guitare', '200€', '<img src="./image/guitare.jpg" alt="guitare">');
$basse = array('basse', '200€', '<img src="./image/basse.jpg" alt="basse">');
$batterie = array('batterie', '200€', '<img src="./image/batterie.jpg" alt="batterie">');

$all_instruments = array($guitare, $basse, $batterie);

foreach ($all_instruments as $instrument) {
    echo $instrument[0]. "\n";
    echo $instrument[1]. "\n";
    echo $instrument[2]. "\n";
}

?>