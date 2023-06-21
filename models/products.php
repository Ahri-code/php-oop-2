<?php 

class Product {

    public $name;
    public $description;
    public $price;
    public $image;


    function __construct($name = "debug", $description = "lorem ipsum", $price = "0", $image = "../img/standard.jpg")
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }
}

?>