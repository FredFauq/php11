<?php

if (isset($_POST['addition'])) {
    if (!is_numeric($_POST['chiffre1']) == false && !is_numeric($_POST['chiffre2']) == false) {
        if (isset($_POST['chiffre1']) && (isset($_POST['chiffre2']))) {
            $result1 = $_POST['chiffre1'];
            $result2 = $_POST['chiffre2'];
            $resulttotal = $result1 + $result2;
            echo $result1 . " + " . $result2 . " = " . $resulttotal;
        }
    } elseif (is_numeric($_POST['chiffre1']) == false || is_numeric($_POST['chiffre2']) == false) {
        echo "ce n'est pas un chiffre";
    }
}
if (isset($_POST['soustraction'])) {
    if (!is_numeric($_POST['chiffre1']) == false && !is_numeric($_POST['chiffre2']) == false) {
        if (isset($_POST['chiffre1']) && (isset($_POST['chiffre2']))) {
            $result1 = $_POST['chiffre1'];
            $result2 = $_POST['chiffre2'];
            $resulttotal = $result1 - $result2;
            echo $result1 . " - " . $result2 . " = " . $resulttotal;
        }
    } elseif (is_numeric($_POST['chiffre1']) == false || is_numeric($_POST['chiffre2']) == false) {
        echo "ce n'est pas un chiffre";
    }
}
if (isset($_POST['multiplication'])) {
    if (!is_numeric($_POST['chiffre1']) == false && !is_numeric($_POST['chiffre2']) == false) {
        if (isset($_POST['chiffre1']) && (isset($_POST['chiffre2']))) {
            $result1 = $_POST['chiffre1'];
            $result2 = $_POST['chiffre2'];
            $resulttotal = $result1 * $result2;
            echo $result1 . " * " . $result2 . " = " . $resulttotal;
        }
    } elseif (!is_numeric($_POST['chiffre1']) == true || !is_numeric($_POST['chiffre2']) == true) {
        echo "ce n'est pas un chiffre";
    }
}
if (isset($_POST['division'])) {
    if (!is_numeric($_POST['chiffre1']) == false && !is_numeric($_POST['chiffre2']) == false) {
        if (isset($_POST['chiffre1']) && (isset($_POST['chiffre2']))) {
            $result1 = $_POST['chiffre1'];
            $result2 = $_POST['chiffre2'];
            if ($result2 != 0) {
                $resulttotal = $result1 / $result2;
                echo $result1 . " / " . $result2 . " = " . $resulttotal;
            } else {
                echo "Impossible! division par 0";
            }
        }
    } elseif (is_numeric($_POST['chiffre1']) || is_numeric($_POST['chiffre2'])) {
        echo "ce n'est pas un chiffre";
    }
}
if (isset($_POST['raz'])) {
    $resulttotal = 0;
}
?>