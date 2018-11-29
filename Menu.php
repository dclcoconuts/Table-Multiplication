<?php
    function affiche_menu()
    {
        // tableaux contenant les liens d'accès et le texte à afficher
        // Futur lien pour extension Super révision
        // $tab_menu_lien = array( "Index.php", "Checkbox.php", "Interrogation.php", "Revision.php");
        // $tab_menu_texte = array( "Révision", "Checkbox", "Interrogation", "Super révision");

        $tab_menu_lien = array( "Index.php", "Checkbox.php", "Interrogation.php");
        $tab_menu_texte = array( "Révision", "Checkbox", "Interrogation");
        
        // informations sur la page
        $info = pathinfo($_SERVER['PHP_SELF']);

        $menu = "\n<div id=\"menu\">\n    <ul id=\"onglets\">\n";

        

        // boucle qui parcours les deux tableaux
        foreach($tab_menu_lien as $cle=>$lien)
        {
            $menu .= "    <li";
                
            // si le nom du fichier correspond à celui pointé par l'indice, alors on l'active
            if( $info['basename'] == $lien )
                $menu .= " class=\"active\"";
                
            $menu .= "><a href=\"" . $lien . "\">" . $tab_menu_texte[$cle] . "</a></li>\n";
        }
        
        $menu .= "</ul>\n</div>";
        
        // on renvoie le code xHTML
        return $menu;        
    }
?>
