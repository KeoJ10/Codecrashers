<?php

namespace media\movieModel;

class movieModel{
    
    private $name;
    private $year;
    private $genre;
    private $rating;

    public function __construct($name, $year, $genre, $rating) {
        $this->name = $name;
        $this->year = $year;
        $this->genre = $genre;
        $this->rating = $rating;
    }

    public function getName() {
        return $this->name;
    }

    public function getYear() {
        return $this->year;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getRating() {
        return $this->rating;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function setYear($year) {
        $this->year = $year;
    }
    public function setGenre($genre) {
        $this->genre = $genre;
    }
    public function setRating($rating) {
        $this->rating = $rating;
    }

    // Factory method to create a movie from POST data
    public static function fromPostData($postData)
    {
        return new self(
            $postData['name'] ?? $postData['title'] ?? '',
            intval($postData['year'] ?? 0),
            $postData['genre'] ?? '',
            floatval($postData['rating'] ?? 0)
        );
    }

    // Factory method to create a movie from database row
    public static function fromDatabaseRow($row)
    {
        return new self(
            $row['name'] ?? '',
            intval($row['year'] ?? 0),
            $row['genre'] ?? '',
            floatval($row['rating'] ?? 0)
        );
    }

    // Method to validate movie data
    public function isValid()
    {
        return !empty($this->name) && $this->year > 1800 && !empty($this->genre)
        && $this->rating >= 0 && $this->rating <= 10;
    }
}