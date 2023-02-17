<?php

include 'classes/Person.php';

$george = new Person('George', 'Vicha', 48, 'Programmer');
$eli = new Person('Eliska', 'Vichova', 48, 'Nurse');


echo $george->getFullName();
echo $george->getAge();
echo $george->getJob();
echo $george->goToWork();

echo $george;
?>

