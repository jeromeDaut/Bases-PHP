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
        ?>
        <h1>Sélection du personnage</h1>
    </header>
    <main>
        <form action="#" method="get">
            <label for="sexe"> Choix du personnage:</label>
            <select name="sexe" id="sexe">
                <option value="Femme">Femme</option>
                <option value="Homme">Homme</option>
            </select>
            <input type="submit" value="Envoyer">
        </form>
        <!-- <img src="./assets/images/playerF.png" alt="dessin femme"> -->
        <?php
        if (isset($_GET["sexe"])) {
            if ($_GET["sexe"]==="Femme") {
                echo '<img src="./assets/images/playerF.png" alt="dessin femme">';
            }else {
                echo '<img src="./assets/images/player.png" alt="dessin homme">';
            
            }
        } else {
            echo "<h3>Veuillez envoyer votre choix dans le champs ci-dessus</h3>";
        }
        
        ?>
    </main>
</body>
</html>