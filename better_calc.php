<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Better Calc</title>
</head>
<body>
  <form action="better_calc.php " method="post">
  First Num:<input type="number" step="0.1" name="num1"><br>
  op: <input type="textbox" name="op"><br>
  Second Num: <input type="number" name="num2"><br>
  <input type="submit">
  </form>

  <?php 
  $num1 = $_POST["num1"]; 
  $num2 = $_POST["num2"];

  $op = $_POST["op"];

  if($op == "+"){
    echo $num1 + $num2;
  }elseif($op== "-"){
    echo $num1 - $num2;
  }elseif( $op == "/") {
    echo $num1 / $num2;
  }elseif($op =="*"){
    echo $num1 * $num2;
  }else {
    echo "invalid operator";
  }
  
  ?>
</body>
</html>