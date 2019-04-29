<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Getters and Setters</title>
</head>
<body>
  <h1>Getters and setters</h1>

  <?php 
    class Movie {
      public $title;
      private $rating; //visibility modifiers

      function __construct($title, $rating = "NR") {
        $this->title = $title;
        $this->setRating($rating);
      }
      function getRating() {
        return $this->rating;
      }
      function setRating($rating) {
        if($rating == "G" || $rating == "PG"|| $rating == "PG-13"|| $rating == "R") {
          $this->rating = $rating;
        }else {
          $this->rating = "NR";
        }
      }
    }

    $avengers = new Movie("Avengers", "PG-13");
    
    echo $avengers->getRating();

    $avengers->setRating("dog");

    echo $avengers->getRating();
  ?>
</body>
</html>