<?php

    //chamando o arquivo
    require_once "Conta.php";

    class ControleDeDados
    {
        //atributos
        private string $contaData;

        //construtor
        function _construct(string $_contaData)
        {
            $this->contaData = $_contaData;
        }

        //get e set
        function set_contaData($_contaData)
        {
            $this->contaData = $_contaData;
        }

        function get_contaData()
        {
            return $this->contaData;
        }

        //methods
    }

?>