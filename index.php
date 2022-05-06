<?php

class Movie
{
    private string $title;
    private string $description;
    private int $year;
    private string $genre;


    public function __construct(string $title, int $year, string $genre, string $description = null)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->description = $description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}


$batman = new Movie('Batman Begins', 2008, 'Action', "Un bel film su Batman");
$superman = new Movie('Man of Steel', 2017, 'Action', "Opinabile film");

var_dump($batman);
var_dump($superman);

$superman->setDescription("Poteva essere meglio...");

var_dump($superman);
