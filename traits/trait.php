<?php 

trait onStock {
	private $stock;

	public function getQuantity() {
        if(is_null($this->stock) || is_nan($this->stock)) {
            throw new Exception("not a number");
        }
        if($this->stock == 0) {
            throw new RangeException("out of stock");
        }
        
		return $this->weight;
	}

	public function setQuantity($stock) {
		$this->weight = $stock;
	}
}

?>