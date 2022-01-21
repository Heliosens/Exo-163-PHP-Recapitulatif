<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
    </head>
    <body>
        <h1>Liste des élèves</h1>
        <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
        <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
        ?>
        <ul>
            <?php
            // TODO Display the students here, each student inside a new <li> element
            foreach ($students as $student){
            echo "<li> $student </li>";
            }
            ?>
        </ul>
        <hr>
        <h1>Date du jour</h1>
        <form>

            <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
            <label for="day">Day</label>
            <select  name="day" id="day"><?php
                for($i = 1 ; $i <= 31 ; $i++){
                   echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <label for="month">Month</label>
            <select  name="month" id="month"><?php
                for($i = 1 ; $i <= 12 ; $i++){
                   echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <label for="year">Year</label>
            <select  name="year" id="year"><?php
                for($i = 2022 ; $i >= 2015 ; $i--){
                   echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
        </form>
        <hr>
        <?php
        if(isset($_GET['sexe']) && $_GET['sexe'] === "fille"){
            echo "<p>Je suis une fille</p>";
        }
        elseif (isset($_GET['sexe']) && $_GET['sexe'] === "garçon"){
            echo "<p>Je suis un garçon</p>";
        }
        else echo "<p>Je suis indéfini</p>"
        ?>
    </body>
</html>