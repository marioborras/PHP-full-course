<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>functions</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="name">
<input type="number" name="age">
<input type="submit">
</form>
  <?php
    function sayHello($name="user",$age=100) {
      echo "Hi $name!, you are $age <br>";
    };
    sayHello();
    
  ?>
  <br>
  <?php
    sayHello("Mario", 33)
    ?>
    <?php
    sayHello($_POST["name"], $_POST["age"])
    ?>
</body>
</html>