

       <h1 class="titleOne">Coucou</h1>
       <h1 class="titletwo">Salut</h1>
       <div class="bgRed">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quis saepe consequuntur quasi nemo placeat vero sequi, nulla impedit. Quasi, ullam asperiores. Nostrum, labore recusandae.</p>
        </div>
        <div class="bgGreen">
            <p>Hello</p>
            <p>Hi</p>
        </div>
        <input class="button" type="button" value="changement couleur background">
        <hi class="titleform">formulaire</hi>

        <form class="form" action="#" method="GET">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" required>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required>
            <label for="message">Message:</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <input type="submit" value="Envoyer">
            <?php 

            if (isset($_GET["nom"])) {
                # code...
                echo "<div class='resultForm'>";
                echo "le nom : $_GET[nom] <br />";
                if ($_GET["age"]) {
                    # code...
                    echo "L'age est : $_GET[age] ans
                    <br />";
                }
                echo "</div>";
            }
            
            ?>

