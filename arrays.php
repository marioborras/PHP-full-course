<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arrays</title>
</head>
<body>

  <?php 
   $friends = array("Kevin", "Karen", "Oscar", "Jim");
  $friends[1] = "Dwight"; 
   echo $friends[1];
   echo count($friends); //how many elements are in this array.
  ?>

  <form action="arrays.php" method="POST">
  Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
  Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
  Bananas: <input type="checkbox" name="fruits[]" value="bananas"><br>
  Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
  <input type="submit">
  </form>

  <?php 
  $fruits = $_POST["fruits"];
  echo $fruits[0];
  ?>
</body>
</html>