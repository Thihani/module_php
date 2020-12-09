<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Your shopping basket</h1>
<pre>
<?php
var_dump($_POST);
?>
</pre>
<?php
include"functions.php";
global $items;
$chosedItem=$_POST['selection'];

foreach ($chosedItem as $index => $quantity) {
    $item = $items[$index];
    echo $item['name']  . '<br>' .'Quantity: '. $quantity . '<br>'. 'Unit Price: $'. $item['price']. '<br>';   
    $sub_total = $quantity*$item['price'];
    echo 'Sub-total: $'. $sub_total. '<br>'.'<br>' ;
    $total = $total+$sub_total;

};
echo 'Total amount: $'. $total; 


?>
</body>
</html>
