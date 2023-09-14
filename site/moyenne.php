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
        <h1>Calculer une moyenne</h1>
    </header>
    <main>
    <form action="#" method="GET">
        <label for="nbrNotes">Nombre de notes</label>
        <input type="number" name="nbrNotes" id="nbrNotes">
        <input type="submit" value="Ajouter">
    </form>
    <br>
    <?php
    if (isset($_GET['nbrNotes']) && $_GET['nbrNotes']>0) {
        $notes= $_GET['nbrNotes'];
        echo "<form action='#' methode='POST'>";
        echo "<fieldset>";
        echo "<legend>Inscrire les notes pour calculer la moyenne</legend>";

        for ($i=1; $i < $notes+1; $i++) {
            echo "<label for='note'>note ".$i ."</label>";
            echo "<input type='number name='note' id='note'><br>";
        }

        echo "<br><input type='submit' value='Calculer'>";
        echo "</fieldset>";
        echo "</form>";
        

    }
    ?>

    </main>
</body>
</html>