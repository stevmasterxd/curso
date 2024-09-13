<?php
class Person
 {
    private $firstName;
    private $lastName;

public function __construct($firstName, $lastName)
{
    $this->firstName = $firstName;
    $this->lastName = $lastName;
}

public function getFirstName()
{
    return  $this->firstName;
}

public function getLastName()
{
    return  $this->lastName;
}

public function getfullName()
{
    return $this->firstName . " " . $this->lastName;
}
}
$person1 = new Person("Steven", "Bravo");
$person2 = new Person("Juan", "Gonzales");

echo "{$person1->getFullName()} Es amigo de {$person2->getFullName()}";

