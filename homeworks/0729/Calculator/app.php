<?php
session_start();

$_SESSION['results'] = [];
// session_destroy();

if (isset($_POST['number-1']) && isset($_POST['number-2'])) {
    if (empty($_POST['number-1']) && empty($_POST['number-2'])) {
        echo 'Klaida: Įrašykite skaičius!';
    } elseif ($_POST['calculations'] == 'select') {
        echo 'Klaida: Pasirinkite veismą!';
    } elseif (is_numeric($_POST['number-1']) && is_numeric($_POST['number-2'])) {

        if ($_POST['calculations'] == 'add') {
            $_SESSION['results'][] = $_POST['number-1'] + $_POST['number-2'];
        }

        if ($_POST['calculations'] == 'subtract') {
            $_SESSION['results'][] = $_POST['number-1'] - $_POST['number-2'];
        }

        if ($_POST['calculations'] == 'multiply') {
            $_SESSION['results'][] = $_POST['number-1'] * $_POST['number-2'];
        }

        if ($_POST['calculations'] == 'divide') {
            $_SESSION['results'][] = $_POST['number-1'] / $_POST['number-2'];
        }

        if ($_POST['calculations'] == 'square') {
            $_SESSION['results'][] = $_POST['number-1'] ** 2;
            $_SESSION['results'][] = $_POST['number-2'] ** 2;
        }
        
        var_dump($_SESSION['results']);

    } else {

    echo 'Klaida: Galimi tik skaičiai!';

    }
}