<?php
    require_once ("latihan_5a.php");

    $s = new Sarjana();
    $s->getProgram('Mahasiswa')."<br>";
    $s->tugasAkhir();

    $s = new Magister();
    $s->getProgram('Mahasiswa')."<br>";
    $s->tugasAkhir();


