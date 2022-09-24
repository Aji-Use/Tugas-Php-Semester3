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
   
//  class Kambing Implements Hewan {  
//       public function Makan() {  
//            return "Kambing makan rumput<br/>";  
//       }  
             
//       public function Bergerak() {  
//            return "Kambing bergerak dengan berjalan dan berlari<br/>";  
//       }  
        
//       public function Beranak() {  
//            return "Kambing beranak dengan melahirkan<br/>";  
//       }  
//  }  
   
 $monyet = new Monyet;  
//  $kambing = new Kambing;  
   

     echo "<b>Kemampuan Monyet : </b><br/>";  
     echo $monyet->Makan();  
     echo $monyet->Berjalan();  
     echo $monyet->Bersuara();  

//  echo "<br/>";  
//  echo "<b>Kemampuan lainnya pada Monyet : </b><br/>";  
//  echo $kambing->Makan();  
//  echo $kambing->Bergerak();  
//  echo $kambing->Beranak();  
 ?>    