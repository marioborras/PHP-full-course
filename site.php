<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<!-- variables -->
  <?php
    $characterName = "Mario";
    $characterAge = 33;

    echo "There once was a man named $characterName <br>" ;
    echo "He was $characterAge years old <br>";
    $characterName = "Mike";
    echo "He really liked the name $characterName <br>";
    echo "But didn't like being $characterAge <br>";
   ?>
<!-- data types -->
<?php
  $phrase = "To be or not to be"; //strings
  $age = 33; // integers
  $gpa = 3.7; //floating points.
  $isMale = true; //boolean
   // null exists - basically no value;
  echo $phrase;
?>
<!-- Working with strings -->
<?php
$phraseTwo = "Giraffe Academy";
  echo strtolower($phraseTwo); //all lower case
  echo strtoupper($phraseTwo); //all upper case
  echo strlen($phraseTwo); // how many characters in a string
  echo $phraseTwo[0]; // refer to the specific character ..prints G
  $phraseTwo[0] = "B"; 
  echo $phraseTwo; // prints Biraffe Academy
  echo str_replace("Biraffe", "Panda", $phraseTwo); //now says Panda Academy
  echo substr($phraseTwo, 8); //prints Academy
  echo substr($phraseTwo, 8, 3); //prints "Aca"
  $location = substr($phraseTwo,8);
  echo $location; //prints Academy
?>
<!-- Working with numbers -->
<?php 
  echo 5 + 9;  //prints 14
  echo 5.7 * 9; // prints 51.3
  echo 10 % 3; // prints 1
  echo 4 + 5 * 10; // order of operations done first - gives 54.
  echo (4 + 5) * 10; // 90
  echo "<br>";
  $num = 10;
  echo $num;
  $num++; //num-- also works...
  echo $num; //prints 11
  $num += 2; // 13
  echo $num;
  
?>
<!-- functions -->
<?php
 echo abs(-100); //absolute value
 echo pow(2,4); //2 to the 4th power
 echo sqrt(144); //square root
 echo max(2,10);//tell us which of these numbers is bigger.
 echo min(2,10); //tells us which number is smaller.
 echo round(3.2); //rounds down to 3
 echo round(3.7); //rounds up to 4
 echo ceil(3.3); //always rounds up.. to 4.
 echo floor(3.9); //always rounds down to 3.
//  many more exists.. look up php math functions.

 ?>
<!-- user input -->

<br>
<form action="site.php" method="GET">
Name: <input type="text" name="name">
<br>
age: <input type="number" name="age"> 
  <input type="submit">
  <br>
  Your name is: <?php
  echo $_GET["name"] //grabs the input data from the form field called 'name'
?>
<br>
Your age is: <?php
echo $_GET["age"] //grabs the input data from the form field called 'name'
?>
</form>

</body>
</html>