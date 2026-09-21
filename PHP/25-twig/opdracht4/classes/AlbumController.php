<?php

class AlbumController {
    private $albumModel;
    public function __construct($xml) {
        $this->albumModel = new AlbumModel($xml);
    }
    public function index() {
        return $this->albumModel->getAlbums();
    }
    public function addAlbum() {
        if (isset($_POST['submit'])) {
            if (!empty($_POST['album']) && !empty($_POST['duration']) && !empty($_POST['tracks']) && !empty($_POST['songs'] && !empty($_POST['year']))) {
                $this->albumModel->addAlbums($_POST['album'], $_POST['year'], $_POST['duration'], $_POST['tracks'], $_POST['songs']);
            }
            if (empty($_POST['album']) || empty($_POST['duration']) || empty($_POST['tracks']) || empty($_POST['songs'] || empty($_POST['year']))) {
                echo '<script>alert("Vul alle velden in!")</script>';
            }
            if (!empty($_POST['year'] < 1000 || $_POST['year'] > 2025)) {
                echo '<script>alert("Vul een geldig jaar in!")</script>';
            }
            if (!empty($_POST['tracks'] <= 0)) {
                echo '<script>alert("Vul een geldig aantal nummers in!")</script>';
            }
            if (!preg_match('/^\d{2}:\d{2}$/', $_POST['duration'])) {
                echo '<script>alert("Vul een geldige speeltijd in het formaat mm:ss in!")</script>';
            }
        }
    }
    public function deleteAlbum() {
        $index = $_POST['delete'];
        $this->albumModel->deleteAlbum($index);
    }
}
