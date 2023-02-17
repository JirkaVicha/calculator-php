<?php

class Calculator {

  public $num1;
  public $num2;
  public $operator;

  // Methods
  public function add($num1, $num2) {
    return (float)$num1 + (float)$num2;
  }

  public function subtract($num1, $num2) {
    return (float)$num1 - (float)$num2;
  }

  public function multiply($num1, $num2) {
    return (float)$num1 * (float)$num2;
  }

  public function divide($num1, $num2) {
    if ((float)$num1 == 0 || (float)$num2 == 0) {
      throw new Exception("Division by zero");
    }
    return (float)$num1 / (float)$num2;
  }

  public function percent($num1, $num2) {
    return ((float)$num1 * (float)$num2) / 100;
  }

}