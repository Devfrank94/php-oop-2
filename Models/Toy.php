<?php
class Toy extends Product{
    public $family = 'Toy';
    
    public function __construct($_name, $_price, $_genre, $_image)
    {
      Product::__construct($_name, $_price, $_genre, $_image);
    }
}