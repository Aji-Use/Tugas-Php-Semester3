<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas OOP | Semester 3 | Bagus Kuncoro Aji</title>
</head>
<body>
    

    <?php

    // Class

    class Product {
        public $name;   // Property
        public $price;
        public $discount;

        // function
        


        public function getPrice(){
            return $this->price;
        }
        
        public function setPrice($price){
            $this->price = $price;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getDiscount(){
            return $this->discount;
        }
        public function setDiscount($discount){
            $this->discount = $discount;
        }

    }

    // Class child & parent, 
    // CDMusic extends Product
    class CDMusic extends Product {
        public $artist;
        public $genre;

       
        public function __construct($name="name", $price="price", $discount="discount") 
        {
            $this->name = $name;
            $this->price = $price;
            $this->discount = $discount;
        }
        public function getArtist() {
            return $this->artist;
        }
        
        public function setArtist($artist) {
            return $this->artist = $artist;
        }
        public function getGenre() {
            return $this->genre;
        }
        
        public function setGenre($genre) {
            return $this->genre = $genre;
        }

        public function setPrice($price) {
            return $this->price;
        }

        public function getPrice() {
            $harga = $this->price;
            $ppn = ((10/100) * $this->price);
            $discount = ((50/100) * $this->price);

            return ($harga + $ppn) - $discount;
            
        }

        function setDiscount($discount)
        {
            return $this->discount = $discount;
        }
    }

    // CDRack
    // price + 15%, 0 Discount
    class CDRack extends Product {
        public $capacity;
        public $model;


        public function getCapacity() {
            return $this->artist;
        }
        
        public function setCapacity($artist) {
            return $this->artist = $artist;
        }
        public function getModel() {
            return $this->genre;
        }
        
        public function setModel($genre) {
            return $this->genre = $genre;
        }

        public function setPrice($price) {
            return $this->price;
        }

        public function GetPrice() {
            $harga = $this->price;
            $ppn = ((15/100) * $this->price);
            $discount = 0;

            return ($harga + $ppn) - $discount;
        }

        function setDiscount($discount)
        {
            return $this->discount = $discount;
        }
    }

    $buy = new Product();
    $cdm = new CDMusic();
    $cdr = new CDRack();



    // Implementasi
    $buy->setName("CD Music");
    $buy->setPrice(35000);
    $buy->setDiscount("5%");

    $cdm->setArtist("Andmesh");
    $cdm->setGenre("POP");


    echo "Nama Product : " .$buy->getName(). "<br>";
    echo "Artis : " .$cdm->getArtist(). "<br>";
    echo "Genre: " .$cdm->getGenre(). "<br>";
    echo "Discount : " .$buy->getDiscount(). "<br>";
    echo "Price : Rp. " .$buy->getPrice(). "<br>";


    echo "<br>";
    $buy->setName("CD Rack");
    $buy->setPrice(40000);
    $buy->setDiscount("0");
    $cdr->setCapacity("1 GB");
    $cdr->setModel("New Product");

    // View
    
    echo "Nama Produk : " . $buy->getName() . "<br>";
    echo "Capacity : " . $cdr->getCapacity() . "<br>";
    echo "Model : " . $cdr->getModel() . "<br>";
    echo "Diskon : " . $buy->getDiscount()."<br>";
    echo "Price : " . $buy->getPrice(). "<br>";
  
    

    ?>
</body>
</html>