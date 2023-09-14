<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="./assets/page3.css"> -->
        <link rel="stylesheet" href="./assets/style.css">

        <title>Document</title>
    </head>
    <body>
        <header>
            <?php
            include("nav/nav.php");
            ?>
        </header>
        <main>
            <h1 class="titlePage3">Affichage des tables de multiplication</h1>
            <br/>
            <form action="#" method="GET">
                <label for="multi">Choisissez votre multiplicateur pour afficher la table</label>
                <input type="number" name="multi" id="multi" required>
                <input type="submit" value="Soumettre"> 
            </form>
                <?php

                $get = intval($_GET["multi"] ?? 0); 
                if ($get !== 0) {
                    echo "<section class='tables choiceTable'>";
                    echo "<article class='displayTable'>";
                    echo "<h3 class='subtitlePage3'>" . "Table de " . $get . "</h3>";
                    for ($k = 1; $k <= 10; $k++) {
                        $choiceTable = $k;
                        $produitGet = $choiceTable * $get;
                        echo "<p class='multi'>" . "$choiceTable x " . $get . " = " . $produitGet . "</p>";
                    }
                    echo "</article>";
                    echo "</section>";
                }else {
                 echo "<h4>Veuillez écrire un nombre dans le champs ci-dessus</h4>";
                }
                // xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                echo "<hr>"."<h2> Les tables de 2 à 9 : </h2>";
                echo "<section class='tables'>";
                for ($i=2 ; $i <= 9 ; $i++) { 
                    $multiplicateur= $i; 
                    echo "<article class='displayTable'>";
                    echo "<h3 class='subtitlePage3'>"."Table de " . $multiplicateur ."</h3>";
                    for ($j=1; $j <=10 ; $j++) { 
                        $table= $j;
                        $produit= $table*$multiplicateur;
                        echo "<p class='multi'>"."$table x " . $multiplicateur. " = " .$produit."</p>"; 
                    }
                    echo "</article>";
                }
                echo "</section>";
                ?>
        </main>
</body>
</html>