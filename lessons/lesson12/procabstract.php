<?php

/*
 * Abstract User
 */

function createUser(string $name, string $lastName, int $age): array
{
    return [
        'userName' => [
            'name' => $name,
            'lastName' => $lastName,
        ],
        'age' => $age,
        'userCars' => []
    ];
}

function getUserFirstName(array $user): string
{
    return $user['userName']['name'];
}

function getUserLastName(array $user): string
{
    return $user['userName']['name'];
}

function getUserAge(array $user): int
{
    return $user['age'];
}

function getUserCars(array $user): array
{
    return $user['userCars'];
}

function addCarToUser(array &$user, array $car)
{
    $user['userCars'][] = $car;
}

/*
 * Abstract Car
 */

function createCar(string $name, int $age)
{
    return [
        'name' => $name,
        'age' => $age
    ];
}

function getCarName(array $car): string
{
    return $car['name'];
}

function getCarAge(array $car): int
{
    return $car['age'];
}