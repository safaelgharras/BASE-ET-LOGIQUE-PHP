<?php

$nom = "safa";

$age = 25;

$nombrePréféré = 7;

$prixPlusChère = 14560.99;

$valeurVraie = true;

$makeUp=array("Rouge à lèvres", "Fond de teint", "Mascara");

$test=null;

$nombre = "10";
$nombreInt = (int)$nombre;



echo "Nom : " . $nom . "<br>";

echo "Âge : " . $age . "<br>";

echo "Nombre préféré : " . $nombrePréféré . "<br>";

echo "Prix le plus cher : " . $prixPlusChère . "<br>";

echo "Valeur vraie : " . ($valeurVraie ? 'true' : 'false') . "<br>";

echo "Produits de maquillage : " . implode(", ", $makeUp) . "<br>";

echo "Test : " . var_export($test, true) . "<br>";

echo "Conversion : " . $nombreInt;
?>