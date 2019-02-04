<?php

require $_SERVER['DOCUMENT_ROOT'] . '/app/init.php';
require 'procabstract.php';

$user = [
    'name' => 'Misha',
    'age' => 22,
    'cars' => []
];

$car1 = [
    'name' => 'opel',
    'age' => 5
];

$car2 = [
    'name' => 'honda',
    'age' => 2
];

$user['cars'] = [
    $car1,
    $car2,
];

function printUserFirstCar(array $user)
{
    echo $user['name'] . '\'s first car is ' . $user['cars'][0]['name'];
}

function printUserName(array $user)
{
    echo $user['name'];
}

echo '<pre>', print_r($user, 1),'</pre>';

printUserName($user);
echo '<br>';
printUserFirstCar($user);

?>

