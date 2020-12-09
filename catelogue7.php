<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include"functions.php";
global $items;
?>
    <form action="basket.php" method = "POST">
        <?php foreach($items as $key => $item){ ?>
            
            <?php echo $item["name"]; ?> <br>
            <?php echo "Price: $" .$item["price"]; ?> <br>
            <?php echo $item["photo"]; ?> <br>
            Quantity: 
            <input type="number" name="selection[<?php echo $key; ?>]" value=" ">

            <hr>
        <?php } ?>
        <button>Order</button>
    </form>
</body>
</html>
