<?php
ini_set('declare(strict_types', '1');
class Person
 {
    private string $firstName;
    private string $lastName;

public function __construct($firstName, $lastName)
{
    $this->firstName = $firstName;
    $this->lastName = $lastName;
}

public function getFirstName(): string
{
    return  $this->firstName;
}

public function getLastName(): string
{
    return  $this->lastName;
}

public function getfullName(): string
{
    return $this->firstName . " " . $this->lastName;
}
}
$person1 = new Person("Steven", "Bravo");
$person2 = new Person("Juan", "Gonzales");

echo "{$person1->getFullName()} Es amigo de {$person2->getFullName()}";

