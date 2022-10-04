<?php
    require_once ("lat4_3a.php");

    $mhs1 = new Mahasiswa("Bagus Kuncoro Aji", "G.211.21.0080");
   
    echo "Nama = ", $mhs1->getName(), "<br>";
    echo "Nim = ", $mhs1->getNim();
