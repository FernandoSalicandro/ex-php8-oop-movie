<?php
class Movie
{
    public $title;
    public $year;
    public $imageUrl;
    public $description;
    protected Genre $genre;

    use HasDirector;

    public function __construct($_title, $_year, $_description, Genre $_genre, $_imageUrl)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->imageUrl = $_imageUrl;
        $this->description = $_description;
        $this->genre = $_genre;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    public function getGenre()
    {

        return $this->genre->getGenre();
    }
}
