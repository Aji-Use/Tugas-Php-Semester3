<?php    
 Interface Hewan {  
      public function Makan();  
      public function Berjalan();  
      public function Bersuara();  
 }  
   
 class Monyet implements Hewan {  
      public function Makan() {  
           return "Monyet dapat makan<br/>";  
      }  
             
      public function Berjalan() {  
           return "Monyet bergerak dengan berjalan, melompat, dan bergelantungan<br/>";  
      }  
        
      public function Bersuara() {  
           return "Monyet memiliki suara khas<br/>";  
      }  
 }  
   
   
 $monyet = new Monyet;  
  
   

     echo "<b>Kemampuan Monyet : </b><br/>";  
     echo $monyet->Makan();  
     echo $monyet->Berjalan();  
     echo $monyet->Bersuara();  
  
 ?>    
