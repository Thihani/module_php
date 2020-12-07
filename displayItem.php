<?php
$name=null;
$priceErr = null;
$price = null;
$isNameValid = true;
$isPriceValid = true;
$priceErr = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
    $isNameValid = false;
    } else {
      $name = $_POST["name"];
      echo 'Name of product: '.$name."<br>";
    }
    if (empty($_POST["price"])) {        
        $isPriceValid = false;
      } elseif ($_POST['price']<0){
        $priceErr = true;
      }else{
        $price = $_POST["price"];
        echo 'Price: '.$price."<br>";
      }

    if ($isNameValid ==false){
        header('location: http://localhost/addItem.php?error= * Name of product is required!');
    }
    
    if ($isPriceValid ==false){
      header('location: http://localhost/addItem.php?error= * Price is required!');
    }
    if ($priceErr ==true){
    header('location: http://localhost/addItem.php?error= * Price is greater than 0!');
    }
    if ($isNameValid ==false && $isPriceValid ==false){
      header('location: http://localhost/addItem.php?error= * Name of product and Price are required!');
  }
  }
?>