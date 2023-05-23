<?php

include __DIR__ . '/Kennel.php';
include __DIR__ . '/Food.php';
include __DIR__ . '/Genre.php';
include __DIR__ . '/Toy.php';

class Product{
    public $name;
    public $price;
    public $genre;
    public $image; 

/**
 * @var String $_name; 
 * @var Int $_price; 
 * @var String $_genre; 
 * @var String $_image; 
 */
    public function __construct($_name, $_price, $_genre, $_image)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->genre = $_genre;
        $this->image = $_image;
    }
}