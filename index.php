<?php

    ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //chamando o header
    require_once "./View/Header.php";
?>

<h1><marquee>Hello World</marquee></h1>

<?php
    //chamando o footer
    require_once "./View/Footer.php";
?>