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
        include('nav/nav.php');
        ?>
        <h1>Cercle - Périmètre et Aire</h1>
    </header>
    <main>
        <form action="#" method="post">
            <label for="rayon"> Saisissez la taille du rayon</label>
            <input type="number" name="rayon" id="rayon" required>
            <br>
            <label for="perimetre"> Périmètre</label>
            <input type="checkbox" name="perimetre" id="perimetre">
            <br>
            <label for="aire">Aire</label>
            <input type="checkbox" name="aire" id="aire">
            <br>
            <input type="submit" value="Envoyer">
        </form>
        <?php
            
            $rayon = $_POST["rayon"] ?? null;
            const PI = 3.14;

            if ($rayon !== null) {
                $calculAire = PI * $rayon * $rayon;
                $calculPerimetre = 2 * PI * $rayon;

                if (isset($_POST["perimetre"]) && isset($_POST["aire"])) {
                    echo "l'aire du cercle est de :" . $calculAire . "<br>";
                    echo "le périmètre du cercle est de :" . $calculPerimetre . "<br>";
                } elseif (isset($_POST["perimetre"])) {
                    echo "le périmètre du cercle est de :" . $calculPerimetre;
                } elseif (isset($_POST["aire"])) {
                    echo "l'aire du cercle est de :" . $calculAire . "<br>";
                } else {
                    echo "veuillez remplir le champ";
                }
            } else {
                echo "veuillez remplir le champ du rayon";
            }
        
        ?>
    </main>
</body>
</html>