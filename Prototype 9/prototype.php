<?php
$resultat = "";

function calculer($n1, $n2, $op): string|int|float {

  
    if ($op === "age") {
        if (!is_numeric($n1)) {
            return "Age invalide";
        }
        return  ($n2 - $n1) . " ans";
    }

   
    if (!is_numeric($n1) || !is_numeric($n2)) {
        return "Valeurs invalides";
    }

    
    switch ($op) {
        case "+":
            return $n1 + $n2;
        case "-":
            return $n1 - $n2;
        case "*":
            return $n1 * $n2;
        case "/":
            return ($n2 != 0) ? $n1 / $n2 : "Division par zéro";
        default:
            return "Opération invalide";
    }
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n1 = $_POST["n1"] ?? null;
    $n2 = $_POST["n2"] ?? null;
    $op = $_POST["operation"] ?? null;

    $resultat = calculer($n1, $n2, $op);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP</title>
    <link rel="stylesheet" href="prototype.css">
</head>
<body>

<div class="calculatrice-container">
    <h2>Calculatrice simple</h2>

    <form method="POST" action="">
        <label>Nombre 1 :</label>
        <input type="number" name="n1" required>

        <label>Nombre 2 :</label>
        <input type="number" name="n2" id="n2"
               value="" required>

        <label>Opération :</label>
        <select name="operation" id="operation" onchange="gererAge()" required>
            <option value="+">Addition</option>
            <option value="-">Soustraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
            <option value="age">Calculer âge</option>
        </select>

        <button type="submit">Calculer</button>
    </form>

    <?php if ($resultat !== ""): ?>
        <div class="resultat">Résultat : <?= $resultat ?></div>
    <?php endif; ?>
</div>

<script>
function gererAge() {
    var op = document.getElementById("operation").value;
    var n2 = document.getElementById("n2");

    if (op === "age") {
        n2.value = new Date().getFullYear(); 
        n2.readOnly = true;                  
        n2.style.pointerEvents = "none";     
        n2.style.backgroundColor = "#eee";  
    } else {
        n2.readOnly = false;
        n2.style.pointerEvents = "auto";
        n2.value = "";
        n2.style.backgroundColor = "";
    }
}
</script>


</body>
</html>
