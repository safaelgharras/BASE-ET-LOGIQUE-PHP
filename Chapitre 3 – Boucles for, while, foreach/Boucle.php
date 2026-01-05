<?php
for ($i=0; $i<10; $i++){
    echo $i . "<br>";
}

$fruits = array("pomme", "banane", "orange", "fraise");
foreach($fruits as $fruit){
    echo $fruit . "<br>";
}

$compteur = 0;
while($compteur < 5){
    echo "Compteur est à : " . $compteur . "<br>";
    $compteur++;
}

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        break;
    }
    echo $i;
}
