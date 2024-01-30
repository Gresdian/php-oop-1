<?php
    class Movie {
        public $title;
        public $genre;
        public $year;
        public $director;

        function __construct($_title, $_genre, $_year, $_director ) {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->year = $_year;
            $this->director = $_director;
        }

        public function firstFilm(){
            return $this->title." è il miglior film di tutti";
        }
    }

    $movie_1 = new Movie("Il Signore degli Anelli - Il ritorno del re", "fantasy", 2003, "Peter Jackson" );

    $movie_2 = new Movie("American Sniper", "Azione", 2014, "Clint Eastwood");

    $movie_3 = new Movie("Oppenheimer", "Thriller", 2023, "Christopher Nolan");

    $movie_4 = new Movie("La leggenda di Al, John e Jack", "Commedia", 2002, "Aldo, Giovanni e Giacomo, Massimo Venier");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>