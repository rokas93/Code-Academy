<?php

// Parašykite funkciją, kuri mestų kauliuką iki kol iškris 5 arba 6. Visus savo metimus išvestų į ekrana.(while).
// Papildomas funkcionalumas žaidimui(papildomas sudėtingumas):
// Metame 2 kauliukus (arba vieną kauliuką 2 kartus).
// taisyklės:
// Jeigu kauliukų suma yra mažiau už 5 reiškia - jūs iškarto pralaimejote.
// Jeigu kauliukų suma daugiau už 5 ir:
// +Išmesta buvo 6 ir 6, reiškia - laimėjote dviratį.
// +Abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną.
// +Kitais atvejais – kauliukas metamas dar kartą.
// +Žaidimas turi vykti iki kol žaidėjas laimės / pralaimės(while)
// +Visa žaidimo eiga turėtų būti išvesta į ekraną.

$selectDiceLevel = 2;

function dice($diceLevel)
{
    if ($diceLevel == 1) {
        $diceValue = 0;
    
        while ($diceValue < 5) {
            $diceValue = mt_rand(1, 6);
            var_dump("Kauliuko reikšmė: {$diceValue}.");
        }
        return "Laimėjote! Kauliuko reikšmė: {$diceValue}!";
    } elseif ($diceLevel == 2) {

        $playerWin = false;
        $playerLose = false;
        $firstDiceValue = 0;
        $secondDiceValue = 0;
        $sumDiceValues = 0;

        while ($playerWin === false && $playerLose === false) {

            $firstDiceValue = mt_rand(1, 6);
            $secondDiceValue = mt_rand(1, 6);
            $sumDiceValues = $firstDiceValue + $secondDiceValue;
            
            var_dump("Antro kauliuko reikšmė: {$secondDiceValue}.");
            var_dump("Pirmo kauliuko reikšmė: {$firstDiceValue}.");
            var_dump("Bendra kauliukų reikšmių suma: {$sumDiceValues}");

            if ($sumDiceValues < 5) {
                $playerLose = true;
                return 'Pralaimėjote!';

            } elseif ($firstDiceValue == 6 && $secondDiceValue == 6) {
                $playerWin = true;
                return 'Sveikiname, laimėjote dviratį!';

            } elseif ($sumDiceValues > 5 && $firstDiceValue == $secondDiceValue && $firstDiceValue !== 6) {
                $playerWin = true;
                return 'Laimėjote bilietą į kiną!';
            }
        }
    }
    return 'Galimi lygiai: 1 arba 2.';
}

var_dump(dice($selectDiceLevel));