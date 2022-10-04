<?php
    class Mobil {
        public $name;
        public $merk;

        function getInfo() {
            echo "Nama mobil : " .$this->name. "<br>";
            echo "Merk : " .$this->merk. "<br>";
        }
    }

$ferrari = new Mobil();
$ferrari->name = "abcd";
$ferrari->merk = "adma";

$ferrari->getInfo();