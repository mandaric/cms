<?php

require 'helper.php';

$users = [
    [
        'name' => 'mladen.mandaric',
        'age' => 26
    ],
    [
        'name' => 'henry.louwhoff',
        'age' => 32
    ]
];

//foreach ($users as $user)
//{
//    echo real_name($user['name']);
//    echo '<br />';
//}

$result = user_find_by_name('mladen');

$template = file_get_contents(__DIR__ . '/../views/user.phtml');

$view = str_replace(
    ['{{name}}', '{{age}}'],
    [$result['name'], $result['age']],
    $template
);

echo $view;