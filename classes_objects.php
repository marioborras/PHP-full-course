<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Classes and Objects</title>
</head>
<body>
  <h1>Classes and Objects</h1>
  <?php 
    class Book {
      var $title;
      var $author;
      var $pages;
      function __construct($aTitle, $aAuthor, $aPages) {
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPAges;
        
      }
    } 

    $myBook = new Book("Harry Potter", "JK Rowling", 400);

    echo "$myBook->title <br>";

    $book2 =  new Book("Lord of the Rings", "Tolkien", 900);
    // $book2->title = "Lord of the Rings";
    // $book2->author = "Tolkien";
    // $book2->pages = 900;
   
    echo "$book2->title by $book2->author and $book2->pages long";

  ?>
  <!-- Constructors -->
  <?php 
  class  Student {
    var $name;
    var$major;
    var $gpa;

    function __construct($name, $major, $gpa) {
      $this->name = $name;
      $this->major = $major;
      $this->gpa = $gpa;

    }
    function hasHonors() {
      if($this->gpa > 3.6) {
        return "true, This student has honors <br>";
      }else {
        return "false This student is not in honors <br>";
      }
    }
  }

  $student1 = new Student("Jim", "Business", 2.8);
  echo $student1->hasHonors();

  $student2 = new Student ("Pam", "Art", 3.6);

  echo $student2->hasHonors();
  ?>
</body>
</html>