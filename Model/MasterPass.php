<?php

    class MasterPass{
        //atributo
        public string $passCript;

        //construtor
        function _constructor(string $_passCript)
        {
            $this->passCript = $_passCript;
        }

        //get and set
        private function set_passCript($_passCript)
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