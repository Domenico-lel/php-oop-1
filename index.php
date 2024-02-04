<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class Movie {
    public $title;
    public $genre;
    public $year;

    public function __construct($title, $genre, $year) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

        public function displayInfo() {
            echo "Title: {$this->title}, Genre: {$this->genre}, Year: {$this->year}<br>";
        }
    }

        // Creazione di due oggetti Movie
        $movie1 = new Movie("The Shawshank Redemption", "Drama", 1994);
        $movie2 = new Movie("Inception", "Sci-Fi", 2010);

        echo "Movie 1:<br>";
        $movie1->displayInfo();

        echo "<br>Movie 2:<br>";
        $movie2->displayInfo();

    ?>

</body>
</html>