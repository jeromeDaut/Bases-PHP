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
        <h1>Tableaux</h1>
    </header>
    <main>
        <h2>Etape 1</h2>
        <p>Réaliser un tableau contenant les valeurs: 2,6,12,5,26,34,40,60.</p>
        <h2>Etape 2</h2>
        <p>Réaliser une fonction qui vérifie si un tableau ne contient que des valeurs paire ou impaires.</p>
        <h2>Etape 3</h2>
        <p>Afficher le message pour l'utilisateur.</p>
        <?php
            $tableau=[2,6,12,5,26,34,40,60];
            
            echo "<h2>Résultat : </h2>";
            if (checkTab($tableau)) {
                echo "Le tableau ne contient pas que des valeurs paires. ";
            } else {
                # code...
                echo "Le tableau contient des valeurs impaires. ";
            }
            
            function checkTab($tableau){
                for ($i=0; $i < count($tableau) ; $i++) { 
                    if ($tableau[$i]%2 !== 0) {
                        return false;
                    }
                }
                return true;
            }
        ?>
    </main>
</body>
</html>