<?php
    //chamando o arquivo
    require_once "MasterPass.php";

    class Configuracao
    {
        //atributos
        private string $passWord;    //MasterPass
        private bool $respCript;

        //construtor
        function __construct(string $_password, bool $_respCript)
        {
            $this->passWord = $_password;
            $this->respCript = $_respCript;
        }

        //get e set

        function set_passWord(string $_passWord)
        {
            $this->passWord = $_passWord;
        }

        function get_passWord()
        {
            return $this->passWord;
        }

        function set_respCript(bool $_respCript)
        {
            $this->respCript = $_respCript;
        }

        function get_respCript()
        {
            return $this->respCript;
        }

        //method

    }

?>