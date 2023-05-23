<?php

include __DIR__ . '/../Models/Product.php';

$products = [
  new Product('Collare Trixie Premium', '10', 'https://shop-cdn-m.mediazs.com/bilder/collare/trixie/premium/semistrangolo/nero/2/400/200318_pla_trixie_premium_zugstopp_halsband_schwarz_hs_01_2.jpg', 'Dog'),

  new Kennel('Cuccia per cani Spike Comfort', '56', 'Cucce', 'Dog', 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/comfort/9/400/icon_topseller_1_57__9.jpg'),

  new Food('Smilla Kitten Crocchette', '5', 'Food', 'Cat', 'https://shop-cdn-m.mediazs.com/bilder/smilla/kitten/crocchette/per/gattini/3/400/1_top_seller_1000x1000_1__3.jpg'),

  new Food('Royal Canin Medium Adult', '6', 'Food', 'Dog', 'https://shop-cdn-m.mediazs.com/bilder/royal/canin/medium/adult/crocchette/per/cane/0/400/80731_pla_royalcanin_mediumadult_15kg_hs_01_0.jpg'),

  new Kennel('Tiragraffi Trixie BE NORDIC', '30', 'Cucce', 'Cat', 'https://shop-cdn-m.mediazs.com/bilder/tiragraffi/trixie/be/nordic/cat/tower/juna/3/400/114830_pla_trixie_benordic_cattower_juna_grau_hs_01_3.jpg'),
    
  new Product('Collare Heim Buffalo Cognac', '8', 'https://shop-cdn-m.mediazs.com/bilder/collare/heim/buffalo/cognac/6/400/1__dsc9090_6.jpg', 'Cat'),

  new Toy('Gioco di intelligenza Nomad', '15',  'Dog', 'https://www.zooplus.it/shop/cani/giochi_sport/occupazione/giochi_occupazione_cani/1530848?origin=hopps&q=giochi%20cane&i=1&ro=1'),

  new Toy('KONG Kickeroo', '9',  'Cat', 'https://shop-cdn-m.mediazs.com/bilder/kong/kickeroo/2/400/26806_PLA_Kong_Kickeroo_Giraffe_136111_kong_kickeroo_1_2.jpg'),

  new Toy('Gioco per cani TIAKI Bastoncino', '13',  'Dog', 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/tiaki/bastoncino/in/sughero/con/corda/0/400/309497_pla_cork_bough_fg_5365_0.jpg'),
];