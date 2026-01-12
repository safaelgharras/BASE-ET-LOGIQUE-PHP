<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <h2>Quiz-Niveau Débutant</h2>

    <form method="POST" action="résultat.php">

        <p>1- PHP est un :</p>
            <input type="radio" name="Q1" value="A" required> Langage de programmationb <br>
            <input type="radio" name="Q1" value="B" required> Système d'exploitation <br>

        <p>2- Quelle balise commence un script PHP ?</p>
            <input type="radio" name="Q2" value="A" required> &lt;php&gt;<br>
            <input type="radio" name="Q2" value="B" required> &lt;?php <br>

        <p>3- Quel symbole sert a déclarer une variable en PHP?</p>
            <input type="radio" name="Q3" value="A" required> # <br>
            <input type="radio" name="Q3" value="B" required> $ <br>
    
    </form>
    <button type="submit"></button>
    
</body>
</html>