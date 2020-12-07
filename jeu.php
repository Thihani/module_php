<?php
$aDeviner = 150;
$erreur = null;
$succes = null;
$value = null;
if (isset ($_GET['chiffre'])){
    if ($_GET['chiffre'] > $aDeviner) {
        $erreur = "Votre chiffre est trop grand";
    }elseif ($_GET['chiffre'] < $aDeviner){
        $erreur = "Votre chiffre est trop petit"; 
    }else{
        $succes = "Bravo! Vous avez deviné le chiffre <strong>$aDeviner</strong>";
    }      
    $value = (int) $_GET['chiffre'];
}
?>

<?php if ($erreur):?>
<div class="alert alert-danger">
<?= $erreur ?>
</div>
<?php elseif ($succes):?>
<div class="alert alert-succes">
<?= $succes ?>
</div>
<?php endif ?>


<form action="jeu.php" method = "GET">
<input type="number" name = "chiffre" placeholder = "entre 0 et 1000" value = "<?=htmlentities($_GET['chiffre'])?>">


    
<button type = "submit">Deviner</button>
</form>




