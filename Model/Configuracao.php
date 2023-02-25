<?php
    //chamando o arquivo
    require_once "MasterPass.php";

    class Configuracao
    {
        //atributos
        private MasterPass $passWord;
        public bool $respCript;

        //construtor
        function _construct(MasterPass $_password, bool $_respCript)
        {
            $this->passWord = $_password;
            $this->respCript = $_respCript;
        }

        //get e set
        private function set_passWord($_passWord)
        {
            $this->passWord = $_passWord;
        }

        function get_passWord()
        {
            return $this->passWord;
        }

        function set_respCript($_respCript)
        {
            $this->passWord = $_passWord;
        }

        function get_respCript()
        {
            return $this->respCript;
        }

        //method

    }

?>