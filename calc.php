<?php
// Si la valeur de addition existe récupération par $_POST 
if (isset($_POST['addition'])) {
    // vérification si les valeurs sont numériques 
    if (!is_numeric($_POST['chiffre1']) == false && !is_numeric($_POST['chiffre2']) == false) {
        // récupération des valeurs du tableau
        if (isset($_POST['chiffre1']) && (isset($_POST['chiffre2']))) {
            // déclaration de variables nombre 1 et nombre 2 et resultat de l'opération
            $number1 = htmlspecialchars($_POST['chiffre1']);
            $number2 = htmlspecialchars($_POST['chiffre2']);
            $result = $number1 + $number2;
            // affichage de l'opération
            echo $number1 . " + " . $number2 . " = " . $result;
        }
    } elseif (is_numeric($_POST['chiffre1']) == false || is_numeric($_POST['chiffre2']) == false) {
        echo "ce n'est pas un nombre";
    }
}
if (isset($_POST['soustraction'])) {
    if (!is_numeric($_POST['chiffre1']) == false && !is_numeric($_POST['chiffre2']) == false) {
        if (isset($_POST['chiffre1']) && (isset($_POST['chiffre2']))) {
            $number1 = htmlspecialchars($_POST['chiffre1']);
            $number2 = htmlspecialchars($_POST['chiffre2']);
            $result = $number1 - $number2;
            echo $number1 . " - " . $number2 . " = " . $result;
        }
    } elseif (is_numeric($_POST['chiffre1']) == false || is_numeric($_POST['chiffre2']) == false) {
        echo "ce n'est pas un nombre";
    }
}
if (isset($_POST['multiplication'])) {
    if (!is_numeric($_POST['chiffre1']) == false && !is_numeric($_POST['chiffre2']) == false) {
        if (isset($_POST['chiffre1']) && (isset($_POST['chiffre2']))) {
            $number1 = htmlspecialchars($_POST['chiffre1']);
            $number2 = htmlspecialchars($_POST['chiffre2']);
            $result = $number1 * $number2;
            echo $number1 . " * " . $number2 . " = " . $result;
        }
    } elseif (is_numeric($_POST['chiffre1']) == false || is_numeric($_POST['chiffre2']) == false) {
        echo "ce n'est pas un nombre";
    }
}
if (isset($_POST['division'])) {
    if (!is_numeric($_POST['chiffre1']) == false && !is_numeric($_POST['chiffre2']) == false) {
        if (isset($_POST['chiffre1']) && (isset($_POST['chiffre2']))) {
            $number1 = htmlspecialchars($_POST['chiffre1']);
            $number2 = htmlspecialchars($_POST['chiffre2']);
            // condition nombre 2 est différent de 0
            if ($number2 != 0) {
                // on procéde à la division
                $result = $number1 / $number2;
                echo $number1 . " / " . $number2 . " = " . $result;
                // sinon on déclare la division par zéro impossible
            } else {
                echo "Impossible! division par 0";
            }
        }
    } elseif (is_numeric($_POST['chiffre1']) == false || is_numeric($_POST['chiffre2']) == false) {
        echo "ce n'est pas un nombre";
    }
}
if (isset($_POST['raz'])) {
    $result = 0;
}
?>