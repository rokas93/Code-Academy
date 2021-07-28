<!-- 
Skaičiuotuvas turi turėti sudėtį, atimtį, daugybą, dalybą ir pakelimą kvadratu.
Front-end‘as(HTML kodas) ir Back-end‘as(PHP skriptas) turi būti atskiruose failuose
Visi ankstesni rezultatai turi matytis.
Atnaujinus(refreshin‘us) naršyklės langą, atsakymai išlieka. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="app.php">
        <input type="number" name="number-1" placeholder="Pirmas skaičius">
        <select name="calculations">
            <option value="select">Rinktis veiksmą</option>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            <option value="square">^2</option>
        </select>
        <input type="number" name="number-2" placeholder="Antras skaičius">
        <button type="submit" name="submit">=</button>
    </form>
</body>
</html>