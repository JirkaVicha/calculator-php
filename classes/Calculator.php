<?php

class Calculator {

  public $num1;
  public $num2;
  public $operator;

  // Methods
  public function add($num1, $num2) {
    return $num1 + $num2;
  }

  public function subtract($num1, $num2) {
    return $num1 - $num2;
  }

  public function multiply($num1, $num2) {
    return $num1 * $num2;
  }

  public function divide($num1, $num2) {
    if ($num1 == 0 || $num2 == 0) {
      throw new Exception("Division by zero");
    }
    return $num1 / $num2;
  }

  public function percent($num1, $num2) {
    return ($num1 * $num2) / 100;
  }

}