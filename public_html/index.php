<?php

$gerimai = [
        [
        'name' => 'Vilkmergės alus',
        'price' => 1.89,
        'nuolaida' => 0 // Nuolaida procentais %
        ],
        [
        'name' => 'Coca-Cola',
        'price' => 2.59,
        'nuolaida' => 20 // Nuolaida procentais %
        ],
        [
        'name' => 'Švyturio gintarinis',
        'price' => 1.45,
        'nuolaida' => 5 // Nuolaida procentais %
        ],
        [
        'name' => 'Absolut degtinė',
        'price' => 13.99,
        'nuolaida' => 7 // Nuolaida procentais %
        ],
];

foreach ($gerimai as $key => $gerimas) {
    if ($gerimas['nuolaida'] > 0){
        $gerimai[$key]['css_class'] = 'Taikoma_nuolaida';
        $price_with_discount = $gerimas['price'] * (100 - $gerimas['nuolaida']) / 100;
        $gerimai[$key]['price_with_discount'] = $price_with_discount;
    } else {
        $gerimai[$key]['css_class'] = "Nuolaida_netaikoma";
    }
    
}

?>
<!DOCTYPE html>
<html>
<style>
    .Taikoma_nuolaida {
        font-size: 38px;
        color: red;
    }
    .Nuolaida_netaikoma {
        font-size: 20px;
    }
    .Taikoma_nuolaida .price {
        text-decoration-line: line-through;
    }
</style>
    <head>
        <title>Ataskaita</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text_balance/css" href="style.css">
    </head>
    <body>
        <ul>
            <?php foreach ($gerimai as $key => $gerimas): ?>
            <li class="<?php print $gerimas['css_class']; ?>">
                <span><?php print $gerimas['name']; ?></span>
                <?php if (isset($gerimas['price_with_discount'])): ?>
                <span><?php print $gerimas['price_with_discount']; ?></span>
                <?php endif ;?>
                <span class="price"><?php print $gerimas['price']; ?></span>
            </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>