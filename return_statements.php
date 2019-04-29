<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Return Statements</title>
</head>
<body>
<h1>Return Statements</h1>
  <?php 
  function cube($num) {
   return $num > 1 ? $num * $num * $num : "give me another number greater than 1";
    // return $num * $num * $num;
  }
   echo cube(4);
  ?>
</body>
</html>