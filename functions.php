<?php
function displayItem1 (){
    $nom = "ADIDAS";
    $prix = "100 $";
    $photo = '<img src="image/shoe1.jpg" alt="shoe1"> ';
    echo $nom. "<br>" .$prix ."<br>" .$photo . "<br>";
}

function displayItem2 (){
    $nom = "NIKE";
    $prix = "110 $";
    $photo = '<img src="image/shoe2.jpg" alt="shoe2"> ';
   echo $nom. "<br>" .$prix ."<br>" .$photo . "<br>";
}

function displayItem3 (){
    $nom = "CONVERSE";
    $prix = "120 $";
    $photo = '<img src="image/shoe3.jpg" alt="shoe3"> ';
    echo $nom. "<br>" .$prix ."<br>" .$photo . "<br>";
}

function displayItem($nom, $prix, $photo){
    echo $nom. "<br>" .$prix ."<br>" .$photo . "<br>";
}


?>
