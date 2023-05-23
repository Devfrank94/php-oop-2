<?php

include __DIR__ . '/../Models/Product.php';

$products = [
  new Product('Collare', '10', 'https://i.etsystatic.com/7365095/r/il/583dd5/3993267015/il_570xN.3993267015_59sf.jpg', 'Dog'),
  
  new Kennel('Cuccia M', '35', 'Cucce', 'cat', 'https://www.kasa-store.com/15325-large_default/qeeboo-cat-cave-cuccia-per-gatti-disegnata-da-stefano-giovannoni.jpg'),

  new Food('Cuccia M', '35', 'Cucce', 'cat', 'https://www.kasa-store.com/15325-large_default/qeeboo-cat-cave-cuccia-per-gatti-disegnata-da-stefano-giovannoni.jpg'),


];