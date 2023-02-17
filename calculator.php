<?php
include 'classes/Calculator.php';
$title = 'Simple PHP Calculator';
$result = 0;


if (isset($_POST['submit'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];

  $calculator = new Calculator();

  switch ($operator) {
    case 'plus':
      $result = $calculator->add($num1, $num2);
      break;
    case 'minus':
      $result = $calculator->subtract($num1, $num2);
      break;
    case 'multiply':
      $result = $calculator->multiply($num1, $num2);
      break;
    case 'divide':
      try {
        $result = $calculator->divide($num1, $num2);
      } catch (Exception $e) {
        $result = "Unable to divide by ZERO.";
      }
      break;
    case 'percent':
      $result = $calculator->percent($num1, $num2);
      break;
  }
}

