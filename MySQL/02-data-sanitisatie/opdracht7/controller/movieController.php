<?php
require_once 'handler/movieHandler.php';
class MovieController {
    private $movieHandler;

    public function __construct($db) {
        $this->movieHandler = new MovieHandler($db);
    }

    public function index() {
        return $this->movieHandler->g();
    }
    public function sortMovies($sort) {
    if(isset($_GET['sort'])) {
        $sort = isset($_GET['sort']) ? $_GET['sort'] : '';
    }
        return $this->movieHandler->sanitizeSort($sort);
    }
}

?>