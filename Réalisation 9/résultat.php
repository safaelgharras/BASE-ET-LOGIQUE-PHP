<?php
 $score = "0";

 $correct = [
   "Q1" => "A",
   "Q2" => "B",
   "Q3" => "B",
   "Q4" => "B",
   "Q5" => "B",
   "Q6" => "B"
];


 foreach($correct as $Question =>$bonneRéponse){
   if(isset($_POST[$Question]) && $_POST[$Question] === $bonneRéponse){
      $score ++;
   }
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="résultat.css">
   <title>Résultat de quiz</title>
</head>
<body>

   <h2>Résultat</h2>

<div class="result-container">
     <p>Votre score est: <strong><?=$score ?> / 6 </strong></p>
</div>

 
<?php

if($score == 6){
   echo " Très bien";
}else if ($score == 3){
   echo "Bien";
}else {
   echo "Encore plus d'effort";
}

?>

<br><br>

   <div class="footer-link">
        <a href="réalisation.php">Recommencer le quiz</a>
   </div>

</body>
</html>




