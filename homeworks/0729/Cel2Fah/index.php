<!-- Prisiminkime 1-os pamokos užduotį, kuomet darėme funkciją, kuri konvertuoja lapsnius iš farenheito į celsijų. 
Papildykime užduotį:  Sukurkime naują php failą, kuris turės laukelį temperatūrai įvesti bei mygtuką, kurį paspaudus gauname konvertuotą temperatūrą. -->

<?php 
$url = "http://$_SERVER[HTTP_HOST]/homeworks/0729/Cel2Fah/app.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $url;?>">
        <p>Konvertuoti: ℉ => °C</p>
        <input type="number" name="number" placeholder="Įveskite ℉">
        <button type="submit">Konvertuoti</button>
    </form>
</body>
</html>