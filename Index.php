<!DOCTYPE html>
<!-- fichier modifié pour CSS par Maxime et Corinne -->
<html lang="FR">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css\Multiplication.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
    <title>Lexique Balise</title>
</head>
<body>
    <header>
        <!-- <?php include 'menu.php';?> -->
    </header>
        
    <main>
        <h1>Les tables de multiplication</h1>
            <form id="form" method="GET">
            <select id="select" name="tables">
                <option id="choix" value="table02" <?php if($_GET['tables']=="table02") echo selected ?>>Table de 2</option>
                <option id="choix" value="table03" <?php if($_GET['tables']=="table03") echo selected ?>>Table de 3</option>
                <option id="choix" value="table04" <?php if($_GET['tables']=="table04") echo selected ?>>Table de 4</option>
                <option id="choix" value="table05" <?php if($_GET['tables']=="table05") echo selected ?>>Table de 5</option>
                <option id="choix" value="table06" <?php if($_GET['tables']=="table06") echo selected ?>>Table de 6</option>
                <option id="choix" value="table07" <?php if($_GET['tables']=="table07") echo selected ?>>Table de 7</option>
                <option id="choix" value="table08" <?php if($_GET['tables']=="table08") echo selected ?>>Table de 8</option>
                <option id="choix" value="table09" <?php if($_GET['tables']=="table09") echo selected ?>>Table de 9</option>
                <option id="choix" value="table10" <?php if($_GET['tables']=="table10") echo selected ?>>Table de 10</option>
            </select> 
            <br><br>
            <input id="bouton" name="bouton" type="submit">
            <br>
            </form> 
    </main>

    <div id="zoneAffichage">
    <?php
        if ( isSet($_GET['bouton']) ) {

            $table = $_GET['tables'];

            $num = substr($table, 5, 2);
            $num1 = intval($num);

            for ($x = 1; $x <= 30; $x++) {
            $result = $x * $num1;
            echo "<p>$x x $num1= $result <br></p>";
            }
        } 
    ?>        
   </div>

    <footer>
 
    </footer>
</body>
 </html>