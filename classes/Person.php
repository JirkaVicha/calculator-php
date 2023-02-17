<?php

class Person {

  public $name;
  public $surname;
  public $age;
  public $job;

  public function __construct($name, $surname, $age, $job)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
    $this->job = $job;
  }

  // Methods
  public function getFullName() {
    echo "The person's name is " . $this->name . ' ' . $this->surname;
    echo '<br>';
  }

  public function getAge() {
    echo $this->name . " is " . $this->age . " years old.";
    echo '<br>';
  }

  public function getJob() {
    echo $this->name . " works as a " . $this->job;
    echo '<br>';
  }

  public function goToWork() {
    echo "I go to the work and now is " . date("l");
    echo '<br>';
  }

  public function __toString()
  {
    return $this->name . ' ' . $this->surname;
  }
}