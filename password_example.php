<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="password_example.php" method="POST">
  Password: <input type="password" name="password">
  <input type="submit">
  </form>
<br><br>

  <?php
  $password = $_POST["password"];
  echo $password;
  ?>
</body>
</html>