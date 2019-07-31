<?php

require '../bootloader.php';

$whiskey = new \App\Drinks\StrongDrink();

$whiskey->setAmount(700);
$whiskey->drink();

$pivasikas = new \App\Drinks\LightDrink();
$pivasikas->setAmount(500);
$pivasikas->drink();
var_dump($whiskey->getAmount(), $pivasikas->getAmount());



$form = [
    'attr' => [
        'method' => 'POST'
    ],
    'fields' => [
        'name' => [
            'label' => 'Name',
            'type' => 'text',
            'extra' => [
                'validators' => [
                    'validate_not_empty',
                ]
            ]
        ],
        'amount_ml' => [
            'label' => 'Amount ML',
            'type' => 'number',
            'extra' => [
                'validators' => [
                    'validate_not_empty'
                ]
            ]
        ],
        'abarot' => [
            'label' => 'Abarot',
            'type' => 'number',
            'extra' => [
                'validators' => [
                    'validate_not_empty'
                ]
            ]
        ],
        'image' => [
            'label' => 'Image',
            'type' => 'text',
            'extra' => [
                'validators' => [
                    'validate_not_empty'
                ]
            ]
        ],
    ],
    'buttons' => [
        'submit' => [
            'title' => 'Submituoti',
            'extra' => [
                'attr' => [
                    'class' => 'blue-btn'
                ]
            ]
        ]
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ],
];

$filtered_input = get_form_input($form);
if (!empty($filtered_input)) {
    validate_form($filtered_input, $form, $modelDrinks);
}

function form_success($filtered_input, &$form, $modelDrinks)
{
    $modelDrinks->insert(new App\Drinks\Drink($filtered_input));
}

function form_fail()
{
    print 'fail';
}

$nav = [
    'left' => [
        ['url' => 'index.php', 'title' => 'Home'],
        ['url' => 'register.php', 'title' => "Registration"]
    ]
];

//$drink = new App\Drinks\Drink();
//$drink->setData([
//    'name' => 'gira',
//    'amount_ml' => 1000,
//    'abarot' => 1.2,
//    'image' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=42e6bcb2-bf0e-4f1c-88ff-08a9dc411321',
//]);

$gira = new App\Drinks\Drink();
$gira->setData([
    'name' => 'Gira',
    'amount_ml' => 1000,
    'abarot' => 1.2,
    'image' => 'no_link'
]);

$sidras = new App\Drinks\Drink();
$sidras->setData([
    'name' => 'Sidriukas',
    'amount_ml' => 330,
    'abarot' => 5.5,
    'image' => 'no_link'
]);

$vanduo = new App\Drinks\Drink();
$vanduo->setData([
    'name' => 'Neptunas',
    'amount_ml' => 1000,
    'abarot' => 0,
    'image' => 'no_link'
]);

$gaivusis_gerimas = new App\Drinks\Drink();
$gaivusis_gerimas->setData([
    'name' => 'Coca-Cola',
    'amount_ml' => 1000,
    'abarot' => 0,
    'image' => 'no_link'
]);


$modelDrinks = new \App\Drinks\Model();
//$modelDrinks->insert($gira);


$drinks = $modelDrinks->get(['abarot' => 40]);

foreach ($drinks as $drink) {
    var_dump($drink);
    $gira->setImage('kazkoks pvz');
    $modelDrinks->update($drink);
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link rel="stylesheet" href="media/css/normalize.css">
    <link rel="stylesheet" href="media/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script defer src="media/js/app.js"></script>
</head>
<body>
<?php require ROOT . '/app/templates/navigation.tpl.php'; ?>

<div class="content">
    <?php require ROOT . '/core/templates/form/form.tpl.php'; ?>
</div>
</body>
</html>
