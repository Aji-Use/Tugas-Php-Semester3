<?php
    class Mahasiswa {
        private $name;
        private $nim;

        function __construct($a = "Name",
        $b = "Nim") 
        {
            $this->name = $a;
            $this->nim = $b;
        }

        function setName($a) {
            $this->name=$a;
        }

        function setNim($b) {
            $this->nim=$b;
        }

        function getName() {
            return $this->name;
        }

        function getNim() {
            return $this->nim;
        }

        function destruct() {}
    }