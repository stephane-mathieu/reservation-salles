<?php

class Renderer {

    //render('users/profil')
    public  static function render(string $path, array $variable = []){

        extract($variable); // Importe les variables dans la table des symboles
        ob_start();
        require_once('templates/view/' . $path . '.html.php');
        $pageContent = ob_get_clean();
        require_once('templates/layout.html.php');
    }

}

?>