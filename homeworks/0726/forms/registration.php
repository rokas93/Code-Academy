<?php

if ($_POST["password"] === $_POST["cnfpassword"] && isset($_POST) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['cnfpassword']) && $_POST['checkbox'] == '2') {
    var_dump($_POST);
} elseif (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['cnfpassword']) || empty($_POST['email']) || $_POST['checkbox'] !== '2') {
    var_dump('Klaida: Būtina užpildyti pažymėtus laukus!');
} elseif ($_POST["password"] !== $_POST["cnfpassword"]) {
    var_dump('Klaida: Nesutampa slaptažodžiai!');
}