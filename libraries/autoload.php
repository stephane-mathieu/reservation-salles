<?php

require_once('libraries/Database.php');
require_once('libraries/Renderer.php');
require_once('libraries/Http.php');
spl_autoload_register(function ($className){
    // className = Controller\USer//
    // require =libraries/controllers/UserControllers.php
    $className =  lcfirst($className);
    $className = str_replace("\\" , "/", $className);
    require_once("libraries/$className.php");

});

?>