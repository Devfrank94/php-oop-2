<?php
class Food extends Product{
    public $family;
    
    public function __construct($_name, $_price, $_family, $_genre, $_image)
    {

        Product::__construct($_name, $_price, $_genre, $_image);
        $this->family = $_family;
        
    }
}