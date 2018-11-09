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
                <input type="checkbox" name="tables[]" value="table02" > Table de 2<br>
                <input type="checkbox" name="tables[]" value="table03" > Table de 3<br>
                <input type="checkbox" name="tables[]" value="table04"> Table de 4<br>
                <input type="checkbox" name="tables[]" value="table05"> Table de 5<br>
                <input type="checkbox" name="tables[]" value="table06"> Table de 6<br>
                <input type="checkbox" name="tables[]" value="table07"> Table de 7<br>
                <input type="checkbox" name="tables[]" value="table08"> Table de 8<br>
                <input type="checkbox" name="tables[]" value="table09"> Table de 9<br>
                <input type="checkbox" name="tables[]" value="table10"> Table de 10<br>
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


