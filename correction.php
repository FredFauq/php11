<?php include 'ctrl.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet" /> 
        <link rel="stylesheet" href="style.css" />
        <title>Calculatrice</title>
    </head>
    <body>
        <div class="bgc">
            <h1>Une calculatrice en PHP</h1>
            <form action="#" method="GET">
                <input type="text" name="chiffre1" value="<?= $chiffre1 ?>"/>
                <input class="button" type="submit" name="addition" value="+"/>
                <input class="button" type="submit" name="soustraction" value="-"/>
                <input class="button" type="submit" name="multiplication" value="*"/>
                <input class="button" type="submit" name="division" value="/"/>
                <input type="text" name="chiffre2" value="<?= $chiffre2 ?>"/>
                <input type="submit" name="reset" value="Reset"/>
            </form>
            <?php
            //utilisation de count pour savoir si il ya des erreurs dans le tableau
            if(count($error) == 0){
            //si il n'y a pas d'erreur afficher le resultat 
                ?>
            <p class="result">Résultat : <?= $result; ?> </p>
            <?php } else { 
                //sinon afficher l'erreur
                ?>
            <p><?= implode('. ', $error) ?></p>
            <?php } ?>
        </div>
    </body>
</html>