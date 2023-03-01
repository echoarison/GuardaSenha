<?php

    ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //chamando o header
    require_once "./View/Header.php";

    //chamando o dados/Controller
    /*echo"<h1 class='text-light'><marquee>Hello World</marquee></h1>";*/
    include_once "./Controller/ConfigController.php";

    $view = new configController();

    include "./" . $view->IndexConfig();

    //chamando o footer
    require_once "./View/Footer.php";
?>