<?php 
 
class Movie{

    public $title;
    public $genre;
    public $language;
    public $overview;

    public function __construct($_title,$_genre,$_language,$_overview)
    {
        $this->title=$_title;
        $this->genre=$_genre;
        $this->language=$_language;
        $this->overview=$_overview;
    }
};



$il_signore_degli_anelli = new Movie('Il signore degli anelli', 'Fantasy', 'Italiano', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus assumenda dolores, sit ullam commodi perspiciatis expedita! Tenetur quae laudantium unde praesentium, reprehenderit repellendus illum molestias ducimus neque porro! Quas, nam'
);

$harry_potter= new Movie('Harry Potter', 'Fantasy', 'Italiano', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus assumenda dolores, sit ullam commodi perspiciatis expedita! Tenetur quae laudantium unde praesentium, reprehenderit repellendus illum molestias ducimus neque porro! Quas, nam'

);

$movie_objects = [];

foreach($movie_objects as $movie){
    $movie_objects = new Movie($movie['title'],$movie['genre'],$movie['language'],$movie['overview']);
    $movie_objects[]= $movie_objects;
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <ul>
    <li> <?= $il_signore_degli_anelli->title?></li>
    <li><?= $il_signore_degli_anelli->genre?></li>
    <li><?= $il_signore_degli_anelli->language?></li>
    <li><?= $il_signore_degli_anelli->overview?></li>
    </ul>
   <ul>
    <li> <?= $harry_potter->title?></li>
    <li><?= $harry_potter->genre?></li>
    <li><?= $harry_potter->language?></li>
    <li><?= $harry_potter->overview?></li>
    </ul>
    
</body>
</html>



