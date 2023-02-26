<?php

    class MasterPass{
        //atributo
        private string $passCript;

        //construtor
        function _construct(string $_passCript)
        {
            $this->passCript = $_passCript;
        }

        //get and set
        function set_passCript($_passCript)
        {
            $this->passCript = $_passCript;
        }

        function get_passCript()
        {
            return $this->passCript;
        }

        //Methods
    }

?>