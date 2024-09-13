<?php
class person
 {
    private $firstName;
    private $lastName;

function __construct($firstName, $lastName)
{
    $this->firstName = $firstName;
    $this->lastName = $lastName;
}
function fullName()
{
    return $this->firstName . " " . $this->lastName;
}
}
$person1 = new person("Steven", "Bravo");

$person2 = new person("Juan", "Gonzales");

echo "{$person1->fullName()} Es amigo de {$person2->fullName()}";

