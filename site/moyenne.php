<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/style.css">

        <title>Document</title>
    </head>
<body>
    <header>
        <?php
            include("nav/nav.php");
            // session_start();
            // if (!isset($_SESSION['nbrDeNotes'])) {
            //     $_SESSION['nbrDeNotes'] = $_GET['nbrNotes'];
            // }
        ?> 
        <h1>Calculer une moyenne</h1>
    </header>
    <main>
    <form action="#" method="GET">
    <label for="nb">Combien de notes : </label>
    <input type="number" name="nb" id="nb"><br/>
    <input type="submit" value="Valider">
</form>
<?php 
    if(isset($_GET['nb']) && $_GET['nb'] >0){
        $nbNotes = $_GET['nb'];
        echo "<form action=\"#\" method=\"POST\">";
        echo "<fieldset>";
        echo "<legend>Moyenne : </legend>";
        for($i = 1; $i <= $nbNotes ; $i++){
            echo "<label for=\"note".$i."\">Note". $i ." : </label>";
            echo "<input type=\"number\" name=\"note".$i."\" id=\"note".$i."\" required><br/>";
        }
        echo "<input type=\"submit\" value=\"Calculer\">";
        echo "</fieldset>";
        echo "</form>";
        if(isset($_POST['note1'])){
            $res = 0;
            for($i = 1; $i <= $nbNotes ; $i++){
                $res += $_POST['note'.$i];
            }
            echo "La moyenne est : ". $res / $nbNotes;
        }
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }
    ?>

    </main>
</body>
</html>