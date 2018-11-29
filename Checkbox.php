<!DOCTYPE html>
<!-- Projet Table de multiplication -->
<html lang="FR">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css\Multiplication.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
    <title>Table de Multiplication</title>
</head>

<!-- mise en place d'un log d'erreur -->
<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__. '/.log_error');
error_reporting(E_ALL & ~E_NOTICE);
?>

<!-- essai log d'erreur -->
<?php 
// error_log("Ecrit un message personnalisé dans le fichier log", 0);
?> 


<?php
include 'Menu.php';
$menu = affiche_menu();
?>

<body>
    <header>
        <!-- <div id="menu">
            <ul id="onglets">
                <li class="active"><a href="Index.php"> Révision </a></li>
                <li><a href="Checkbox.php"> Checkbox </a></li>
                <li><a href="Interrogation.php"> Interrogation </a></li>
                <li><a href="Revision.php"> Super révision </a></li>
            </ul>
        </div> -->
        <?php echo $menu; ?>
    </header>
        
    <main>
    <h1>Les tables de multiplication</h1>
            <form id="form" method="GET">
                <input type="checkbox" name="tables[]" id="table02" value="table02" /> <label for="table02"> Table de 2</label><br>
                <input type="checkbox" name="tables[]" id="table03" value="table03" /> <label for="table03">Table de 3</label><br>
                <input type="checkbox" name="tables[]" id="table04" value="table04" /> <label for="table04">Table de 4</label><br>
                <input type="checkbox" name="tables[]" id="table05" value="table05" /> <label for="table05">Table de 5</label><br>
                <input type="checkbox" name="tables[]" id="table06" value="table06" /> <label for="table06">Table de 6</label><br>
                <input type="checkbox" name="tables[]" id="table07" value="table07" /> <label for="table07">Table de 7</label><br>
                <input type="checkbox" name="tables[]" id="table08" value="table08" /> <label for="table08">Table de 8</label><br>
                <input type="checkbox" name="tables[]" id="table09" value="table09" /> <label for="table09">Table de 9</label><br>
                <input type="checkbox" name="tables[]" id="table10" value="table10" /> <label for="table10">Table de 10</label><br>
            <br><br>
            <input id="bouton1" name="bouton" type="submit">
            <br>
            </form> 
    </main>

    <div id="zoneAffichage">
    <?php

        // if(!$_GET['tables']){
        //     echo "Aucune checkbox n'a été cochée";
        //  }

        if ( isSet($_GET['tables']) ) {
            foreach($_GET['tables'] as $valeur)
            {
                $num = substr($valeur, 5, 2);
                $num1 = intval($num);
                echo "<br><p>Voici la table de $num1</p><br>";
                for ($x = 1; $x <= 30; $x++) {
                    $result = $x * $num1;
                    echo "<p>$x x $num1= $result <br></p>";
                };

            };
        };

    ?>        
    </div>
    <footer>
 
    </footer>
</body>
</html>


