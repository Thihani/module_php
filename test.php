<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
include_once('functions.php'); // identique à include
global $ski_resorts; // "import" de la variable dans ce fichier

// var_dump($ski_resorts); pour savoir ce qu'il y a dans la variable
?>

<h2>Check</h2>
<form action="traloitest.php" method="post">
<?php foreach ($ski_resorts as  $index => $ski_resort) { ?>
        <?php echo $ski_resort["name"]; ?><br>
        <?php echo $ski_resort["elevation"]; ?> m<br>
        <?php echo $ski_resort["skipass_price"]; ?> €<br>
        <input type="number" name="qt[<?php echo $index; ?>]" value="">
        <!-- ici on a pas le droit de fixer la value -->
        <hr>
    <?php } ?>

    <button type="submit">Order ski resorts</button>
        
</form>



</body>
</html>
