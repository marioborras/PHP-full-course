<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inheritence</title>
</head>
<body>
  <h1>Inheritence</h1>
</body>

<?php
  class Chef {
    function makeSalad() {
      echo "The chef makes salad <br>";
    }
    function makeChicken() {
      echo "The chef makes chicken <br>";
    }
  }
  class ItalianChef extends Chef {
    function makePasta() {
      echo "The chef makes pasta";
    }
    function makeChicken() { //overriding the old function.
      echo "The chef makes italian chicken";
    }
  }

  $chef = new Chef();
  $chef->makeChicken();

  $italianChef = new ItalianChef();
  $italianChef->makeChicken();

?>
</html>