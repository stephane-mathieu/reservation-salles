<?php

require_once('libraries/autoload.php');
  // Initialiser la session
  session_start();
  
  // Détruire la session.
  session_destroy();

    // Redirection vers la page de connexion
    // header("Location: index.php");
    \Http::redirect("index.php");
?>