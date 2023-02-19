<?php

class Movie
{

    public $title;
    public $genre;
    public $language;
    public $overview;

    public function __construct($_title, Genre $_genre, $_language, $_overview)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->language = $_language;
        $this->overview = $_overview;
    }

    public function goodVision()
    {
        echo "Buona visione con " . $this->title;
    }
    public function getFullGenre()
    {
        return "{$this->genre->primary} {$this->genre->secondary}";
    }
}
;

class Genre
{
    public $primary;
    public $secondary;

    public function __construct($_primary, $_secondary)
    {
        $this->primary = $_primary;
        $this->secondary = $_secondary;
    }

}

$fantasy_medieval = new Genre(
    'Fantasy',
    'Medieval'
);
$fantasy_wizard = new Genre(
    'Fantasy',
    'Wizard world'
);

$il_signore_degli_anelli = new Movie(
    'Il signore degli anelli',
    $fantasy_medieval,
    'Italiano',
    'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus assumenda dolores, sit ullam commodi perspiciatis expedita! Tenetur quae laudantium unde praesentium, reprehenderit repellendus illum molestias ducimus neque porro! Quas, nam'
);

$harry_potter = new Movie(
    'Harry Potter',
    $fantasy_wizard,
    'Italiano',
    'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus assumenda dolores, sit ullam commodi perspiciatis expedita! Tenetur quae laudantium unde praesentium, reprehenderit repellendus illum molestias ducimus neque porro! Quas, nam'

);



$movie_objects = [];

foreach ($movie_objects as $movie) {
    $movie_objects = new Movie($movie['title'], $movie['genre'], $movie['language'], $movie['overview']);
    $movie_objects[] = $movie_objects;
}
;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>OOP</title>
</head>

<body data-bs-theme="dark">
    <div class="container">
        <h1 class='text-center'>Movies</h1>
        <ul>
            <li>
                <?= $il_signore_degli_anelli->title ?>
            </li>
            <li>
                <?= $il_signore_degli_anelli->getFullGenre() ?>
            </li>
            <li>
                <?= $il_signore_degli_anelli->language ?>
            </li>
            <li>
                <?= $il_signore_degli_anelli->overview ?>
            </li>
        </ul>
        <p><i>
                <?= $il_signore_degli_anelli->goodVision() ?><i></p>
        <ul>
            <li>
                <?= $harry_potter->title ?>
            </li>
            <li>
                <?= $harry_potter->getFullGenre() ?>
            </li>
            <li>
                <?= $harry_potter->language ?>
            </li>
            <li>
                <?= $harry_potter->overview ?>
            </li>
        </ul>

        <p><i>
                <?= $harry_potter->goodVision() ?><i></p>
    </div>
</body>

</html>