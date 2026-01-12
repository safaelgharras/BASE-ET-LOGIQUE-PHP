<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="réalisation.css">
    <title>Quiz</title>
</head>
<body>
    <h2>Quiz-Niveau Débutant</h2>

    <form method="POST" action="résultat.php">

        <p class="question">1- PHP est un :</p>
        <div class="answers">
            <input type="radio" name="Q1" value="A" required> Langage de programmation <br>
            <input type="radio" name="Q1" value="B" required> Système d'exploitation <br>
        </div>

        <p class="question">2- Quelle balise commence un script PHP ?</p>
        <div class="answers">
            <input type="radio" name="Q2" value="A" required> &lt;php&gt;<br>
            <input type="radio" name="Q2" value="B" required> &lt;?php <br>
        </div>

        <p class="question">3- Quel symbole sert a déclarer une variable en PHP?</p>
        <div class="answers">
            <input type="radio" name="Q3" value="A" required> # <br>
            <input type="radio" name="Q3" value="B" required> $ <br>
        </div>

        <p class="question">4- Quelle fonction permet d’afficher du texte en PHP ?</p>
        <div class="answers">
            <input type="radio" name="Q4" value="A" required> print()<br>
            <input type="radio" name="Q4" value="B"> echo<br>
        </div>

        <p class="question">5- Comment écrire un commentaire en PHP ?</p>
        <div class="answers">
            <input type="radio" name="Q5" value="A" required> &lt;!-- commentaire --&gt;<br>
            <input type="radio" name="Q5" value="B"> // commentaire<br>
        </div>

        <p class="question">6- Quelle superglobale permet de récupérer les données POST ?</p>
        <div class="answers">
            <input type="radio" name="Q6" value="A" required> $_GET<br>
            <input type="radio" name="Q6" value="B"> $_POST<br>
        </div>


    
        <button type="submit" value="Submit">Valider</button>
    </form>

</body>
</html>