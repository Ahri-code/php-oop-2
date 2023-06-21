<?php 

class Product {

    public $name;
    public $description;
    public $price;
    public $image;
    public $species;

    function __construct($name = "debug", $description = "lorem ipsum", $price = "0", $image = "../img/standard.jpg", $species = "cat")
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->species = $species;
    }

    public function printName() {
        return $this->name;
    }
    
    public function printImg() {
        return $this->image;
    }

    public function printDescription() {
        return $this->description;
    }

    public function printPrice() {
        return $this->price;
    }
}

?>