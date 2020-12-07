
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


echo $_GET['error'];
?>
<form action="displayItem.php" method="POST">
    Name of product: <input type="text" name="name" value = "<?=htmlentities($_POST['Name'])?>" >    
    <br><br>    
    Price: <input type="number" name="price" value = "<?=htmlentities($_POST['Price'])?>">     
    <br><br>
    <input type="submit" name="Submit" value="Submit">
</form> 
</body>
</html>

