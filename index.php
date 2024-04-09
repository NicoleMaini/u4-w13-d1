<!-- file che viene letto dal sito come file principale e automatico all'apertura della cartella -->
<?php
// php punto e virgola obbligatori
// variabili iniziano con il dollaro
$my_var = "hello world";
// echo stampa il valore in html
echo $my_var;
echo "<br>";
// esercizio 1


$today = getdate();

print_r($today);
echo "<br>";
print_r($today["month"]);


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

switch ($day) {
    case "Jenuary":
        $day = "Gennnaio";
        break;

    case "February":
        $day = "Febbraio";
        break;

    case "March":
        $day = "Marzo";
        break;

    case "Thursday":
        $day = "Aprile";
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
echo "<br>";


$date = date('l, j F Y');
$num_date = ("m");
echo $num_date;
echo $date;
