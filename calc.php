<?php

if (isset($_POST['addition'])) {
    if (!is_numeric($_POST['chiffre1']) == false && !is_numeric($_POST['chiffre2']) == false) {
        if (isset($_POST['chiffre1']) && (isset($_POST['chiffre2']))) {
            $number1 = $_POST['chiffre1'];
            $number2 = $_POST['chiffre2'];
            $result = $number1 + $number2;
            echo $number1 . " + " . $number2 . " = " . $result;
        }
    } elseif (is_numeric($_POST['chiffre1']) == false || is_numeric($_POST['chiffre2']) == false) {
        echo "ce n'est pas un nombre";
    }
}
if (isset($_POST['soustraction'])) {
    if (!is_numeric($_POST['chiffre1']) == false && !is_numeric($_POST['chiffre2']) == false) {
        if (isset($_POST['chiffre1']) && (isset($_POST['chiffre2']))) {
            $number1 = $_POST['chiffre1'];
            $number2 = $_POST['chiffre2'];
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
            $number1 = $_POST['chiffre1'];
            $number2 = $_POST['chiffre2'];
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
            $number1 = $_POST['chiffre1'];
            $number2 = $_POST['chiffre2'];
            if ($number2 != 0) {
                $result = $number1 / $number2;
                echo $number1 . " / " . $number2 . " = " . $result;
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