<?php

// include __DIR__ . '/Product.php';

class Kennel extends Product{
    public $family;
    
    
    public function __construct($_name, $_price, $_family, $_genre, $_image)
    {
        Product::__construct($_name, $_price, $_family, $_genre, $_image);
        $this->family = $_family;
        
    }
}