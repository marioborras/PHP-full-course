<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Including</title>
</head>
<body>
<h1>Including HTML/PHP</h1>
  <?php 
    include "header.html" 
  ?>
  <?php 
    $title = "My Story";
    $author = "Mario Borras";
    $wordCount = 459;

    include "article-header.php";
  ?>
  <?php 
  include "madlibs.php";
  ?>
  <p>hello world</p>
  <?php 
    include "footer.html"; 
  ?>

  <?php 
    include "usefool-tools.php";
    sayHi("Mario");
    
  ?>
</body>
</html>