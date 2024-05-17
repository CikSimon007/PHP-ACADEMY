<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//lvl1

echo 'ahoj <br>';
date_default_timezone_set('Europe/Bratislava');
$currentDateTime = date('Y-m-d H:i:s');
echo "Aktuálny dátum a čas: $currentDateTime <br><br>";

$date_time = date("Y-m-d H:i:s");
$file = "log.txt";
file_put_contents($file, $date_time . PHP_EOL, FILE_APPEND);
//Parameter FILE_APPEND označuje, že reťazec sa má pridať na koniec súboru (a nie prepísať obsah súboru). PHP_EOL je konštanta, ktorá obsahuje koncový znak riadku, aby bol zápis na novom riadku. 

function getLogs() {
    $file = "log.txt";
    $log_content = file_get_contents($file);
    return nl2br($log_content); // Using nl2br to convert newlines to <br> tags for HTML output
}
echo getLogs() . "<br>";

$current_time = date("H:i"); //cas vo formate hodina minuta
if ($current_time > "08:00") {  //ak je aktualny cas viac ako 8
    $meskanie = "meskanie";  //do premennej meskanie zapisem meskanie
} else {
    $meskanie = "";  //inak premenna prazdna
}

function logArrival($meskanie) {
    $date_time = date("Y-m-d H:i:s");
    $file = "log.txt";  //nazov suboru kam to budeme zapisovat
    file_put_contents($file, $date_time . " " . $meskanie . PHP_EOL, FILE_APPEND);//zapis info do suboru
}

logArrival($meskanie); //zavolame

$current_hour = date("H"); //ziskame 24hod.format
if ($current_hour >= 20 && $current_hour <= 24) {    //ak sme v rozmedzi 20 az 24 tak hodi chybu ze nemozem prist po 20
    die("Chyba: Príchod po 20:00 nie je povolený.");
} else {
    $meskanie = "";
    logArrival($meskanie);
}
?>
</body>
</html>
