<?php

    ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //chamando o header
    require_once "./View/Header.php";

    //chamando o dados
    echo"<h1 class='text-light'><marquee>Hello World</marquee></h1>";

    //chamando o footer
    require_once "./View/Footer.php";
?>