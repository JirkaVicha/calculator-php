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
        $result = "Unable to divide.";
      }
      break;
    case 'percent':
      $result = $calculator->percent($num1, $num2);
      break;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title><?= $title ?></title>
</head>
<body>

<div class="container-sm">

<!--Calculator Form-->
<h2>Simple PHP Calculator</h2>
<form action="calculator.php" method="post" class="row gx-3 gy-2 align-items-center">
    <div class="col-sm-3">
      <input type="text" class="form-control" name="num1" placeholder="first number">
    </div>
    <div class="col-sm-2">
      <select class="form-select" name="operator">
        <option value="plus">PLUS</option>
        <option value="minus">MINUS</option>
        <option value="multiply">MULTIPLY</option>
        <option value="divide">DIVIDE</option>
        <option value="percent">PERCENTAGE</option>
      </select>
    </div>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="num2" placeholder="second number">
    </div>
    <div class="col-auto">
      <button type="submit" name="submit" class="btn btn-primary">Calculate</button>
   </div>
</form>
<br>
<div>
<p class="fs-2">Result: <?= $result; ?></p>
</div> 
</div> 


</body>
</html>