<?php

$form_array = [
    'action' => 'index.php',
    'method' => 'POST',
    'fields' => [
        'first_name' => [
            'label' => 'Vardas',
            'type' => 'text',
            'value' => '',
            'error' => 'Klaida!',
            'validator' => [
                'validate_not_empty',
            ],
            'filter' => FILTER_SANITIZE_NUMBER_INT,
            'placeholder' => 'Onutė'
        ],
        'second_name' => [
            'label' => 'Pavardė',
            'type' => 'text',
            'value' => '',
            'placeholder' => 'Kimarinskienė'
        ],
    ]
];


function get_form_input($form_array)
{
    $filter_parameters = [];
    foreach ($form_array['fields'] as $key => $field_values) {
        $filter_parameters[$key] = FILTER_SANITIZE_SPECIAL_CHARS;
        if (isset($field_values['filter'])) {
            $filter_parameters = $field_values['filter'];
        } else {
            $filter_parameters[$key] = FILTER_SANITIZE_SPECIAL_CHARS;
        }
    }
    return filter_input_array(INPUT_POST, $filter_parameters);
}

;

$safe_input = get_form_input($form_array);
validate_not_empty($safe_input['first_name'], $form_array['fields']['first_name']);
validate_not_empty($safe_input['second_name'], $form_array['fields']['second_name']);

function validate_not_empty($field_input, &$field)
{
    if (strlen($field_input) == 0) {
        $field['error'] = 'neteisingai įvesta informacija';
    } else {
        return true;
    }
}


var_dump(get_form_input($form_array));
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>06.25</title>
    <link rel="stylesheet" type="text/css" href="includes/normalize.css">
    <link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
<form action="<?php print $form_array['action']; ?>" method="<?php print $form_array['method']; ?>">
    <?php foreach ($form_array['fields'] as $key => $input): ?>
        <label><?php print $input['label']; ?></label>
        <input name="<?php print $key; ?>" type="<?php print $input['type']; ?>"
               placeholder="<?php print $input['placeholder']; ?>">
        <?php if (isset($input['error'])): ?>
            <span><?php print $input['error']; ?></span>
        <?php endif; ?>
    <?php endforeach; ?>

    <button>Submit</button>
</form>
</body>
</html>