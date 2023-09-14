<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
        include("nav/nav.php");
        ?>
    </header>
    <main>
        <h1>affichage d'une pyramide</h1>

        <form action="#" method="POST">
            <label for="hauteur">Hauteur de la pyramide :</label>
            <input type="number" name="hauteur" id="hauteur" required>
            <input type="submit" value="Envoyer">
        </form>
        <br/>
        <?php
        // echo "$hauteur";
        if ($_POST !== 0 && $_POST !== null) {
        $hauteur = $_POST['hauteur']??null;
        $text="";    
        for ($i=0; $i < $hauteur; $i++) {
            $text .="x";
            echo $text. "<br/>"; 
        }
        for ($j=0; $j < $hauteur ; $j++) { 
            $text= substr($text,0,strlen($text)-1);
            echo $text. "<br/>"; 

        }
    }
        ?>
    </main>
</body>
</html>