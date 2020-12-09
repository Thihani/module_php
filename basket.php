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
//var_dump($_POST);
?>
</pre>
<?php
include"functions.php";
global $items;
$chosedItem=$_POST['selection'];

foreach ($chosedItem as $index) {
    $item = $items[$index];
   echo $item['name'] . ' - Price: $'. $item['price'] . $item['photo'] .  '<br>';
}   

?>
</body>
</html>
