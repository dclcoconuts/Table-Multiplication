<!DOCTYPE html>
<!-- Projet Table de multiplication -->
<html lang="FR">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css\Multiplication.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
    <title>Table de multiplication</title>
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
    <?php echo "<p>En construction</p>"; ?>
    </main>
 
    <footer>
 
    </footer>
</body>
</html>


