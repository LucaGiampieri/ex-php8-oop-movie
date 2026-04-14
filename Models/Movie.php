<?php

class Movie
{
    //variabili di istanza
    public $title;
    public $director;
    public $year;
    public $genre;

    //costruttore
    public function __construct($title, $director, $year, $genre)
    {
        //passiamo i valori alle variaibli di istnza tramite il costruttore
        $this -> title = $title;
        $this -> director = $director;
        $this -> year = $year;
        $this -> genre = $genre;
    }

    //metodo
    public function centurySelector()
    {
        if ($this->year < 2000) {
            return $this->title . "<p> è un film del XX secolo</p>";
        } else {
            return $this->title . "<p> è un film del XXI secolo</p>";
        }
    }

}
