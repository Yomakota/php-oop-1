<!-- - è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie
{
    public $title;
    public $director;
    public $genre;
    public $year;

    public function __construct($_title, $_director, $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
    }

    // TITLE
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    //DIRECTOR
    public function setDirector($director)
    {
        $this->director = $director;
    }

    public function getDirector()
    {
        return $this->director;
    }

    //GENRE
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    //YEAR
    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }
}

//MOVIE-1
$movie = new Movie('Passage of Venus', 'P.J.C. Janssen', 'Documentary');
$movie->setYear(1874);
var_dump($movie);

//MOVIE-2
$movie2 = new Movie('Le Rotisseur', 'Emile Reynaud', 'Animation');
$movie2->setYear(1878);
var_dump($movie2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Movie</title>
</head>

<body>
    <h1>Cinema</h1>
    <div>
        <h2>Movie Room 1</h2>
        <ul class="list-unstyled">
            <li><b>Title:</b> <?php echo $movie->getTitle() ?></li>
            <li><b>Director:</b> <?php echo $movie->getDirector() ?></li>
            <li><b>Genre:</b> <?php echo $movie->getGenre() ?></li>
            <li><b>Year:</b> <?php echo $movie->getYear() ?></li>
        </ul>
    </div>
    <div>
        <h2>Movie Room 2</h2>
        <ul class="list-unstyled">
            <li><b>Title:</b> <?= $movie2->getTitle() ?></li>
            <li><b>Director:</b> <?= $movie2->getDirector() ?></li>
            <li><b>Genre:</b> <?= $movie2->getGenre() ?></li>
            <li><b>Year:</b> <?= $movie2->getYear() ?></li>
        </ul>
    </div>
</body>

</html>