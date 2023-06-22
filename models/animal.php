<?php 

class Filter extends Product {
    
    public $filter;

    function __construct($name = "debug", $description = "lorem ipsum", $price = "0", $image = "../img/standard.jpg", $species = "cat", $filter = "none")
    {
        parent::__construct($name, $description, $price, $image, $species);
        $this->filter = $filter;
    }
}

?>