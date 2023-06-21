<?php 

class Filter extends Product {
    
    public $filter;

    function __construct($name = "debug", $description = "lorem ipsum", $price = "0", $image = "../img/standard.jpg", $species = "cat", $filter = "none")
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->species = $species;
        $this->filter = $filter;
    }
}

?>