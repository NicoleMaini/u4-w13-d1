<!-- file che viene letto dal sito come file principale e automatico all'apertura della cartella -->
<?php
// php punto e virgola obbligatori
// variabili iniziano con il dollaro
$my_var = "hello world";
// echo stampa il valore in html
echo $my_var;
echo "<br>";


// esercizio 1 - data ita

echo "<br>";

$today = getdate();
$day = $today["weekday"];

echo "<br>";
switch ($day) {
    case "Monday":
        $day = "Lunedì";
        break;

    case "Tuesday":
        $day = "Martedì";
        break;

    case "Wednesday":
        $day = "Mercoledì";
        break;

    case "Thursday":
        $day = "Giovedì";
        break;

    case "Friday":
        $day = "Venerdì";
        break;

    case "Saturday":
        $day = "Sabato";
        break;

    case "Sunday":
        $day = "Domenica";
        break;

    default:
        echo 'Opzione non riconosciuta';
        break;
};

$month = $today["month"];

switch ($month) {
    case "Jenuary":
        $month = "Gennnaio";
        break;

    case "February":
        $month = "Febbraio";
        break;

    case "March":
        $month = "Marzo";
        break;

    case "April":
        $month = "Aprile";
        break;


    default:
        echo 'Opzione non riconosciuta';
        break;
};
echo "<br>";


$date = date('l, j F Y');
$numday = $today["mday"];
$year = $today["year"];
echo $day." , ".$numday." ".$month." ".$year;


