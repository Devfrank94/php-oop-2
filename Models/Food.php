<?php
class Food extends Product{
    public $family;
    
    public function __construct($name, $price, $family, $_genre, $_image)
    {

        Product::__construct($name, $price, $_genre, $_image);
        $this->family = $family;
        
    }
}