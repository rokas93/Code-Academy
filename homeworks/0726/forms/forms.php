<!-- Sukurkite formą su GET metodu, kurioje būtų skaičiuojama dviejų skaičių daugyba. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="number1">Pirmas skaičius:</label>
        <br>
        <input type="text" name="number1">
        <br><br>
        <label for="number2">Antras skaičius:</label>
        <br>
        <input type="text" name="number2">
        <br><br>
        <button type="submit">Skaičiuoti</button>
        <br><br>
    </form>
</body>
</html>

<?php
if (isset($_GET['number1']) && isset($_GET['number2']) && !empty($_GET['number1']) && !empty($_GET['number2'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];

    $result = $number1 + $number2;

    echo "$number1 + $number2 = <strong>$result</strong><br><br>";
}
?>

<!-- Sukurkite POST registracijos formą su pakartotiniu slaptažodžiu ir būtinais duomenimis. -->
<!-- Registracijos duomenis išsiųskite į kitą registracija.php failą ir juos atvaizduokite. -->

<?php 
$url = "http://$_SERVER[HTTP_HOST]/homeworks/0726/forms/registration.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .need {color: #FF0000;}
    </style>
</head>
<body>
    <hr>
    <form method="POST" action="<?php echo $url;?>" enctype="multipart/form-data">

        <label for="username">Vardas:</label>
        <span class="need">*</span>
        <br>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="email">El. pašto adresas:</label>
        <span class="need">*</span>
        <br>
        <input type="text" name="email">
        <br><br>
        <label for="password">Slaptažodis:</label>
        <span class="need">*</span>
        <br>
        <input type="password" name="password">
        <br><br>
        <label for="cnfpassword">Patvirtinkite slaptažodį:</label>
        <span class="need">*</span>
        <br>
        <input type="password" name="cnfpassword">
        <br><br>
        <label for="address">Adresas:</label>
        <br>
        <input type="text" name="address">
        <br><br>
        <label for="postcode">Pašto kodas:</label>
        <br>
        <input type="text" name="postcode">
        <br><br>
        <label for="checkbox">Noriu gauti naujienas</label>
        <input type="checkbox" name="checkbox" value="1" checked>
        <br>
        <label for="checkbox">Susipažinau su taisyklėmis</label>
        <input type="checkbox" name="checkbox" value="2">
        <span class="need">*</span>
        <br><br>
        <button type="submit">Registruotis</button>
        <br><br>
    </form>
</body>
</html>