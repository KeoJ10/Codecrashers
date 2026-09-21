<?php
class AlbumModel {
    private $xml;
    private $path;

    public function __construct($xmlFile) {
        $this->xml = simplexml_load_file($xmlFile);
        $this->path = $xmlFile;
    }

    public function getAlbums() {
        $albums = [];
        foreach ($this->xml->album as $index => $album) {
            $albums[] = [
                'title' => $album->title,
                'year' => $album->year,
                'duration' => $album->duration,
                'tracks' => $album->tracks,
                'songs' => $album->songs,
                'index' => $index
            ];
        }
        return $albums;
    }

    public function addAlbums($albumTitle, $year, $duration, $tracks, $songs) {
        $album = $this->xml->addChild('album');
        $album->addChild('title', htmlspecialchars($albumTitle));
        $album->addChild('year', htmlspecialchars($year));
        $album->addChild('duration', htmlspecialchars($duration));
        $album->addChild('tracks', htmlspecialchars($tracks));
        $album->addChild('songs', htmlspecialchars($songs));
        $this->xml->asXML($this->path);
    }

    public function deleteAlbum($index) {
        var_dump($this->xml->album[$index]->year);
        unset($this->xml->album[$index]);
        $this->xml->asXML($this->path);
    }
}
