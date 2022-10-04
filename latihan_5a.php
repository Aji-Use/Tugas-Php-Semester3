<?php
    abstract class Mahasiswa {
        abstract protected function getTugasAkhir();
        abstract protected function getProgram($postfix);

        public function tugasAkhir(){
            print $this->getTugasAkhir() . "<br>";
        }
    }

    class Sarjana extends Mahasiswa {
        protected function getTugasAkhir()
        {
            return "Skripsi";
        }

        public function getProgram($spotfix) {
            print "{$spotfix} S1";
        }
    }

    class Magister extends Mahasiswa {
        // public function getTugasAkhir()
        // {
        //     return "Tesis";
        // }

        public function getProgram($spotfix)
        {
            print "{$spotfix} S2";
        }
    }