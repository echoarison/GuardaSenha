<?php

    class Conta
    {
        //atributos
        public string $userConta;
	    public string $emailConta;
	    public string $passwordConta;
	    public string $origemConta;

        //construtor
        function _construct(string $_userConta, string $_emailConta, string $_passwordConta,
        string $_origemConta)
        {
            $this->userConta = $_userConta;
            $this->emailConta = $_emailConta;
            $this->passwordConta = $_passwordConta;
            $this->origemConta = $_origemConta;
        }

        //get e set
        function set_userConta($_userConta)
        {
            $this->userConta = $_userConta;
        }

        function get_userConta()
        {
            return $this->userConta;
        }

        function set_emailConta($_emailConta)
        {
            $this->emailConta = $_emailConta;
        }

        function get_emailConta()
        {
            return $this->emailConta;
        }

        function set_passwordConta($_passwordConta)
        {
            $this->passwordConta = $_passwordConta;
        }

        function get_passwordConta()
        {
            return $this->passwordConta;
        }

        function set_origemConta($_origemConta)
        {
            $this->origemConta = $_origemConta;
        }

        function get_origemConta()
        {
            return $this->origemConta;
        }

        //methods
    }

?>