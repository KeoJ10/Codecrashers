<?php

class blogHandler {

    private $title = [];
    private $author = [];
    private $date = [];
    private $content = [];


    public function __construct($title, $author, $date, $content) {
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->content = $content;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getDate() {
        return $this->date;
    }

    public function getContent() {
        return $this->content;
    }

    public function getBlogById($id) {
        return null;
    }
}