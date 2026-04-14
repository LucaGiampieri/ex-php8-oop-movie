<?php

trait Rateable
{
    //variabile di istanza
    protected $rating;

    //metodi set e get
    public function setRating($rating)
    {
        if ($rating < 0 || $rating > 10) {
            return "Rating non valido";
        }

        $this->rating = $rating;
    }

    public function getRating()
    {
        return $this->rating ?? "Non valutato";
    }
}
