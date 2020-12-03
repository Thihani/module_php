<?php

$list_article = [
    ["ADIDAS", "Price: 100 $", '<img src="./image/shoe1.jpg" alt="shoe1">'],
    ["NIKE", "Price: 150 $", '<img src="./image/shoe2.jpg" alt="shoe2">'],
    ["CONVERSE", "Price: 70 $",'<img src="./image/shoe3.jpg" alt="shoe3">'],
];
      
  for ($i = 0; $i< 3; $i++) {    
    for ($j = 0; $j < 3; $j++) {
      echo $list_article[$i][$j];
      echo "<br>";
    }    
  }

/* foreach($list_article as [$nom, $prix, $photo]){
  echo $nom;
  echo "<br>";
  echo $prix;
  echo "<br>";
  echo $photo;
  echo "<br>";
  }
*/
?>
