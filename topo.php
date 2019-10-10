<?php

$antwoorden = 0;

$landen["Japan"] = "Japan"; 
$landen["Mexico"] = "Mexico";
$landen["USA"] = "USA";
$landen["India"] = "India";
$landen["Korea"] = "Korea";
$landen["China"] = "China";
$landen["Nigeria"] = "Nigeria";
$landen["Argentina"] = "Argentina";
$landen["Egypt"] = "Egypt";
$landen["UK"] = "UK";

$hoofdsteden["Japan"] = "Tokyo";
$hoofdsteden["Mexico"] = "Mexico City";
$hoofdsteden["USA"] = "New York City";
$hoofdsteden["India"] = "Mumbai";
$hoofdsteden["Korea"] = "Seoul";
$hoofdsteden["China"] = "Shangai";
$hoofdsteden["Nigeria"] = "Lagos";
$hoofdsteden["Argentina"] = "Buenos Aires";
$hoofdsteden["Egypt"] = "Cairo";
$hoofdsteden["UK"] = "London";

foreach ($landen as $value) {
    echo "Wat is de hoofdstad van ". $value;
    echo "?\n";
    $antwoord = readline();
    if ($hoofdsteden[$value] === $antwoord) {
        echo "Correct!\n";
        $antwoorden++;
    } else {
        echo "Helaas, $antwoord is niet de hoofdstad van $value.\n";
        echo "Het Correcte antwoord is ". $hoofdsteden[$value];
        echo "\n";
    }

}

echo "\nJe hebt $antwoorden van de 10 goed geraden";

?>