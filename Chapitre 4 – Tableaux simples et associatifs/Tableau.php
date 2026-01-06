<?php

$animaux = ["Chien", "Chat", "Lapin", "Hamster"];
echo "Quatrième animal : " . $animaux[3] . "<br>";


foreach ($animaux as $animal) {
    echo "Animal : $animal <br>";
}

$makeup = [
    "marque" => "too faced",
    "type" => "fond de teint",
    "teinte" => "vanilla",
    "prix" => 39.99
];
echo "Prix du fond de teint " . $makeup["prix"] . "<br>";

$quotes = [
    "l'amour" => "L'amour est la poésie des sens.",
    "amitie" => "L'amitié double les joies et réduit de moitié les peines.",
    "vie" => "La vie est un mystère qu'il faut vivre, et non un problème à résoudre."
];
array_push($quotes,"Le bonheur n'est pas quelque chose de prêt à l'emploi. Il vient de vos propres actions.");
unset($quotes["vie"]);

foreach ($quotes as $sujet => $citation) {
    echo ucfirst($sujet) . " : " . $citation . "<br>";
}

echo "nombre total des citacions :" . count($quotes) . "<br>";