<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>if Statements</title>
</head>
<body>
  <h1>If Statements</h1>
<?php 
$isMale = false;
$isTall = true;

if($isMale && $isTall) {
  echo "You are male and are tall";
}elseif ($isMale && !$isTall) {
  echo "You are a short male";
} elseif (!$isMale && $isTall) {
  echo "You are not male but are tall";
} else {
  echo "You are not male";
}

?>
<br>
<?php
  function getMax($num1, $num2) {
    return $num1 > $num2 ? $num1 : $num2;
  }
  echo getMax(1,3);
?>
</body>
</html>