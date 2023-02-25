<?php

    //chamando o arquivo
    require_once "Conta.php";
    require_once "Configuracao.php";

    class Seguranca
    {
        //atributo
        private Conta $contaData;
	    private Configuracao $resp;

        //construtor
        function _construct(Conta $_contaData, Configuracao $_resp)
        {
            $this->contaData = $_contaData;
            $this->resp = $_resp;
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

        function set_resp($_resp)
        {
            $this->resp = $_resp;
        }

        function get_resp()
        {
            return $this->resp;
        }

        //methods
    }

?>