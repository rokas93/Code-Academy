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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .form-calculator {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }

        .form-calculator .checkbox {
        font-weight: 400;
        }

        .form-calculator .form-floating:focus-within {
        z-index: 2;
        }

        .form-calculator input[name="number-1"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }

        .form-calculator input[name="number-2"] {
        border-radius: 0;
        }

        .form-calculator select[name="calculations"] {
        border-top: 0;
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
    
    </style>
</head>
<body>
    <main class="form-calculator">
        <form method="POST" action="app.php">
            <h1 class="h3 mb-3 fw-normal text-center">Skaičiuotuvas</h1>
            <div class="form-floating">
                <input type="number" class="form-control" id="floatingInput" name="number-1" placeholder="number-1">
                <label for="floatingInput">Pirmas skaičius</label>
            </div>
            <div class="form-floating">
                <input type="number" class="form-control" id="floatingPassword" name="number-2" placeholder="number-2">
                <label for="floatingPassword">Antras skaičius</label>
            </div>
            <select class="form-select" multiple name="calculations">
                <option value="select" selected>Rinktis veiksmą</option>
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
                <option value="square">^2</option>
            </select>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Skaičiuoti</button>
        </form>
    </main>
</body>
</html>