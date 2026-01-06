<?php
function direBonjour($nom) {
    return "Bonjour " . $nom . " !";
}
echo direBonjour("Alice");


function additionner($a, $b) {
    return $a + $b;
}
$somme = additionner(5, 10);

echo "La somme de 5 et 10 est : " . $somme . "<br>";

$compteur = 0;
function incrementerCompteur() {
    global $compteur;
    $compteur++;
}
incrementerCompteur();
echo "Compteur après incrémentation : " . $compteur . "<br>";