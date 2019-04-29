<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>While Loops</title>
</head>
<body>
  <h1>While Loops</h1>
<?php 
  $index = 1;
  while($index <= 5){
    echo "$index <br>";
    $index++;
  }
// Do while runs the code and then checks the condition.

  do{
    echo $index;
  }while($index < 0);
?>


<?php 
$luckyNumbers = array(4,8,16,14,23,42);

  for($num = 0; $num < count($luckyNumbers); $num++) {
    echo "$luckyNumbers[$num] <br>";
  }
?>
</body>
</html>