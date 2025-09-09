<?php

class Genre 
{
    protected $genre;
    private $genreColors =[
        'Sci-Fi' => 'bg-info',
        'Action' => 'bg-danger',
        'Thriller' => 'bg-warning',
        'Crime' => 'bg-dark text-white',
        'Drama' => 'bg-secondary',
        'Comedy'=> 'bg-success'
    ];

    public function __construct($_genre)
    {
        $this->genre= $_genre;
    }



    public function getGenre(){

        $allGenres ='';
         foreach($this->genre as $curr_genre){
            $colorClass= $this->genreColors[$curr_genre] ?? 'bg-primary';
            $allGenres .= "<span class='badge rounded pill m-1 {$colorClass}'>$curr_genre</span>" ;
        };

        return $allGenres;

    }
}

