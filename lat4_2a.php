<?php
    class Mahasiswa {
        public $name;
        public $nim;

        function __construct($a, $b)
        {
            $this->name=$a;
            $this->nim=$b;
            echo "class telah dibuat <br>";
        }
        function __construct($a, $b)
        {
            $this->name=$a;
            $this->nim=$b;
            echo "class telah dibuat <br>";
        }

        function cetak() {
            echo $this->name. "<br>". $this->nim."<br>";
        }

        function __destruct()
        {
            echo "Kelas telah dihancurkan";
        }
        
    }