<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="url_parameters.php" method="GET">
  Name: <input type="text" name="name"> <br>
  <input type="submit">
  </form>

  <?php 
  echo $_GET["name"]
  ?>
</body>
</html>