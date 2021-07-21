<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Parašykite funkciją, kuri priimtų argumentą - masyvą ir sumaišytu jo elementus atsitiktine tvarka, bet pirmą ir paskutinį paliktu vietoje.
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$arr = [1, 2, 3, 4, 5];

function suffleElements(array $arr)
{
    $first = array_shift($arr);
    $last = array_pop($arr);

    shuffle($arr);

    array_unshift($arr, $first);
    array_push($arr, $last);

    return $arr;
}

var_dump(implode(' ', suffleElements($arr)));

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Sukurkite masyvą $vartotojas su laukais - vardas, pavardė, amžius, paštas.(Užuomina. Asociatyvus masyvas)
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$user = [
    'name' => [
        'Petras', 
        'Jonas', 
        'Povilas'
    ],
    'surname' => [
        'Petraitis', 
        'Jonaitis', 
        'Povilaitis'
    ],
    'age' => [
        '10', 
        '27', 
        '64'
    ],
    'mail' => [
        'petras.petraitis@mail.com', 
        'jonas.jonaitis@mail.com', 
        'povilas.povilaitis@mail.com'
    ]
];

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Sukurkite funkciją yraPilnametis, kuri priimtų vieną parametrą - $vartotojas(masyvas iš praeitos užduoties) ir GRAŽINTU tekstą su statusu: nepilnametis, pilnametis, pensininkas.
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function isAdult(array $arr) {

    if (array_key_exists('age', $arr)) {

        $userAge = $arr['age'];
        $seniorAge = 64;
        $adultAge = 18;

        foreach ($userAge as &$value) {
            if($value < $adultAge) {
                $result[] = "Nepilnametis. Amžius: {$value}";
            } elseif ($value < $seniorAge) {
                $result[] = "Pilnametis. Amžius: {$value}";
            } else {
                $result[] = "Pensininkas. Amžius: {$value}";
            }
        }
        return $result;
    }
}

var_dump(isAdult($user));