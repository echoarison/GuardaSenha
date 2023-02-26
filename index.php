<?php

    ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //chamando o model
    require_once './Model/Configuracao.php';
    require_once './Model/MasterPass.php';

    //fazendo teste de class
    $testeMaster = new MasterPass();

    //instanciando MastetPass
    $testeMaster->set_passCript("admin1234");

    //guardando o valor

    echo "Class MasterPass : " . $testeMaster->get_passCript();

    $guardTest = $testeMaster->get_passCript();

    echo "<br>" . gettype($guardTest);
    //iniciando
    $testeConfig = new Configuracao($guardTest,true);

    //instanciando Configuracao
    //$testeConfig->set_passWord($guardTest);

    echo "<br>Acessando pelo Configuracao: " . $testeConfig->get_passWord();
    
?>