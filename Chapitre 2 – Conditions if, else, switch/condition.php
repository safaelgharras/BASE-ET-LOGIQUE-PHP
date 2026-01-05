<?php
$age = 24;
if($age>=18){
    echo "vous etes majeur" . "<br>";
} 

$note = 18;
if($note>=10){
    echo "vous avez la moyenne" . "<br>";
} else if ($note>=15) {
    echo "Très bien" . "<br>";
} else {
    echo "vous n'avez pas la moyenne" . "<br>";
}

$age = 22;
$carte = true;

if ($age >= 18 && $carte == true) {
    echo "entrée autorisée" . "<br>";
}else{
    echo "entrée non autorisée" . "<br>";
}

$jour = "Lundi";
switch($jour){
    case "Lundi" :
        echo "Début de la semaine" . "<br>";
        break;

    case "dimanche + Samedi": 
        echo "Fin de la samaine" . "<br>";
        break;

    default :
    echo "Un jour normal" . "<br>";
}


$message =($age >= 20) ? "vous etes majeur" : "vous etes mineur";
echo $message;