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
            <label for="profil"> Choix du personnage:</label>
            <select name="profil" id="profil" onchange="submit()">
                <option value="Katy" <?php if(isset($_GET["profil"])&& $_GET["profil"] === "Katy")echo "selected" ?>>Katy</option>
                <option value="Robert" <?php if(isset($_GET["profil"])&& $_GET["profil"]==="Robert")echo "selected" ?>>Robert</option>
                <option value="Yves" <?php if(isset($_GET["profil"])&& $_GET["profil"]==="Yves")echo "selected" ?>>Yves</option>
            </select>
        </form>
        <h2>Personnage :</h2>
        <?php
        $personnages = [
            "Katy" => [
                "Nom : "     => "Katy",
                "Age : "     => 22,
                "Sexe : "    => "Femme",
                "Force : "   => 3,
                "Agilité : " => 6
            ],
            "Robert" => [
                "Nom : "     => "Robert",
                "Age : "     => 28,
                "Sexe : "    => "Homme",
                "Force : "   => 5,
                "Agilité : " => 4
            ],
            "Yves" => [
                "Nom : "     => "Yves",
                "Age : "     => 22,
                "Sexe : "    => "Homme",
                "Force : "   => 2,
                "Agilité : " => 7
            ]
        ];
        
        function afficherPersonnage($personnage) {
            echo '<figure style="display: flex; align-items: end;margin-left: 10px;">';
            echo '<img src="./assets/images/player' . $personnage["Nom : "] . '.png" alt="dessin ' . $personnage["Nom : "] . '">';
            echo "<figcaption style='margin-left: 10px'>";
            foreach ($personnage as $cle => $valeur) {
                echo "$cle$valeur<br>";
            }
            echo "</figcaption>";
            echo "</figure>";
        }

        if (isset($_GET["profil"])) {
            $profil = $_GET["profil"];
            if (isset($personnages[$profil])) {
                afficherPersonnage($personnages[$profil]);
            }
        }

                
        ?>
    </main>
</body>
</html>