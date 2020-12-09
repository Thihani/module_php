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


$items = [
    "Adidas" => [
        "name" => "ADIDAS",
        "price" => "100", 
        "photo" => '<img src="./image/shoe1.jpg" alt="shoe1" style="width:200px;height:auto">',
    ],
    "Nike" => [
        "name" => "NIKE",
        "price" => "110",
        "photo" => '<img src="./image/shoe2.jpg" alt="shoe2" style="width:200px;height:auto">',
    ],
    "Converse" => [
        "name" => "CONVERSE",
        "price" => "120",
        "photo" => '<img src="./image/shoe3.jpg" alt="shoe3" style="width:200px;height:auto">',
    ],    
];


$ski_resorts = [
    'serreche' => [
        'name' => 'Serre Chevalier',
        'elevation' => '2800',
        'skipass_price' => 45,
    ],
    'chamrousse' => [
        'name' => 'Chamrousse',
        'elevation' => '2250',
        'skipass_price' => 35,
    ],
    'valdisere' => [
        'name' => 'val d\'Isere',
        'elevation' => '2950',
        'skipass_price' => 65,
    ],
];

?>
