<?php

class Movie
{
    //attivazione del trait Rateable
    use Rateable;

    //variabili di istanza
    public $title;
    public $director;
    public $year;
    public $genres;

    //costruttore
    public function __construct($title, $director, $year, array $genres)
    {
        //passiamo i valori alle variaibli di istnza tramite il costruttore
        $this -> title = $title;
        $this -> director = $director;
        $this -> year = $year;
        $this -> genres = $genres;
    }

    //metodo
    public function centurySelector()
    {
        if ($this->year < 2000) {
            return $this->title . " è un film del XX secolo";
        } else {
            return $this->title . " è un film del XXI secolo";
        }
    }

}
