<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Switch Statement</title>
</head>
<body>
  <form action="switch_statements.php" method="post">
  What was your grade?
  <input type="text" name="grade">
  <input type="submit">
  </form>

  <?php
  $grade = $_POST["grade"];
  switch($grade){
    case 'A':
      echo "You did amazing!";
      break;
    case "B":
      echo "You did pretty good.";
      break;
    case "C":
      echo "You did alright, try harder";
      break;
    case "D":
      echo "Not very good.";
      break;
    case "F":
      echo "You failed";
      break;
    default: 
      echo "Invalid Grade";
  }

  ?>
</body>
</html>