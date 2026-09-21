<?php

use Symfony\Polyfill\Intl\Idn\Info;

require_once 'vendor/autoload.php';
class databaseHandler {

    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $dbh;

    public function __construct($host, $user, $pass, $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->dbh = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->dbh->connect_error) {
            die("Connection failed: " . $this->dbh->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->dbh;
    }

    public function getAllMovies($whereClause = '', $orderClause = '', $limitClause = '')
    {
        $this->dbh->set_charset('utf8');
        $query = "SELECT id, name, year, genre, rating FROM movies" . $whereClause . $orderClause . $limitClause;
        return $this->dbh->query($query);
    }

    public function insertMovie($name, $year, $genre, $rating)
    {
        $name = $this->dbh->real_escape_string($name);
        $genre = $this->dbh->real_escape_string($genre);
        $query = "INSERT INTO movies (name, year, genre, rating) VALUES ('$name', $year, '$genre', $rating)";
        return $this->dbh->query($query);
    }

    public function updateMovie($id, $name, $year, $genre, $rating)
    {
        $name = $this->dbh->real_escape_string($name);
        $genre = $this->dbh->real_escape_string($genre);
        $query = "UPDATE movies SET name = '$name', year = $year, genre = '$genre', rating = $rating WHERE id = $id";
        return $this->dbh->query($query);
    }

    public function deleteMovie($id)
    {
        $query = "DELETE FROM movies WHERE id = $id";
        return $this->dbh->query($query);
    }

    public function getMovieById($id)
    {
        $query = "SELECT * FROM movies WHERE id = $id";
        return $this->dbh->query($query);
    }

    public function escapeString($string)
    {
        return $this->dbh->real_escape_string($string);
    }

    public function buildSearchClause($search = '')
    {
        if (!empty($search)) {
            $escapedSearch = $this->escapeString($search);
            return " WHERE name LIKE '%$escapedSearch%'";
        }
        return '';
    }

    public function buildSortClause($sort = '')
    {
        if (empty($sort)) {
            return '';
        }

        switch ($sort) {
            case 'filmDown':
                return " ORDER BY name DESC";
            case 'yearDown':
                return " ORDER BY year DESC";
            case 'genreDown':
                return " ORDER BY genre DESC";
            case 'ratingDown':
                return " ORDER BY rating DESC";
            case 'filmUp':
                return " ORDER BY name ASC";
            case 'yearUp':
                return " ORDER BY year ASC";
            case 'genreUp':
                return " ORDER BY genre ASC";
            case 'ratingUp':
                return " ORDER BY rating ASC";
            default:
                return '';
        }
    }

    public function buildLimitClause($limit = '')
    {
        if (!empty($limit) && $limit !== 'all' && $limit > 0) {
            return " LIMIT " . intval($limit);
        }
        return '';
    }

    public function handleMovieAddition($postData)
    {
        if (!isset($postData['title'])) {
            return false;
        }

        // Create movie model using factory method
        $movie = \media\movieModel\movieModel::fromPostData($postData);

        // Validate the movie data
        if (!$movie->isValid()) {
            return false;
        }

        // Insert the movie
        return $this->insertMovie(
            $movie->getName(),
            $movie->getYear(),
            $movie->getGenre(),
            $movie->getRating()
        );
    }

    public function handleMovieUpdate($postData)
    {
        if (!isset($postData['editMovie']) || !isset($postData['name'])) {
            return false;
        }

        $editMovieId = intval($postData['editMovie']);
        
        // Create movie model using factory method
        $updatedMovie = \media\movieModel\movieModel::fromPostData($postData);

        // Validate the movie data
        if (!$updatedMovie->isValid()) {
            return false;
        }

        // Update the movie
        return $this->updateMovie(
            $editMovieId,
            $updatedMovie->getName(),
            $updatedMovie->getYear(),
            $updatedMovie->getGenre(),
            $updatedMovie->getRating()
        );
    }

    public function handleMovieDeletion($getData)
    {
        if (!isset($getData['deleteMovie'])) {
            return false;
        }

        $deleteMovieId = intval($getData['deleteMovie']);
        return $this->deleteMovie($deleteMovieId);
    }

    public function getMovieEditForm($postData)
    {
        if (!isset($postData['editMovie']) || isset($postData['name'])) {
            return '';
        }

        $editMovieId = intval($postData['editMovie']);
        $result = $this->getMovieById($editMovieId);
        
        if (!$result || $result->num_rows === 0) {
            return '';
        }

        $movieData = $result->fetch_assoc();
        $movie = \media\movieModel\movieModel::fromDatabaseRow($movieData);
        
        return '<form method="POST" action="index.php">
            <input type="hidden" name="editMovie" value="' . htmlspecialchars($editMovieId) . '">
            <label for="name">Name:</label>
            <input type="text" name="name" value="' . htmlspecialchars($movie->getName()) . '">
            <label for="year">Year:</label>
            <input type="number" name="year" value="' . htmlspecialchars($movie->getYear()) . '">
            <label for="genre">Genre:</label>
            <input type="text" name="genre" value="' . htmlspecialchars($movie->getGenre()) . '">
            <label for="rating">Rating:</label>
            <input type="number" step="0.1" name="rating" value="' . htmlspecialchars($movie->getRating()) . '">
            <button type="submit">Bijwerken</button>
        </form>';
    }

    public function getMoviesTableOutput($whereClause = '', $orderClause = '', $limitClause = '')
    {
        $result = $this->getAllMovies($whereClause, $orderClause, $limitClause);
        $movies = $result->fetch_all(MYSQLI_ASSOC);

        $output = '';
        foreach ($movies as $movieData) {
            $movie = \media\movieModel\movieModel::fromDatabaseRow($movieData);
            $output .= '<tr><td>' . htmlspecialchars($movie->getName()) . '</td>
            <td>' . htmlspecialchars($movie->getYear()) . '</td>
            <td>' . htmlspecialchars($movie->getGenre()) . '</td>
            <td>' . htmlspecialchars($movie->getRating()) . '</td>
            <td></td>
            <form method="GET">
            <input type="hidden" name="deleteMovie" value="' . htmlspecialchars($movieData['id']) . '">
            <td><button>delete</button></td>
            </form>
            <form method="POST">
            <input type="hidden" name="editMovie" value="' . htmlspecialchars($movieData['id']) . '">
            <td><button>edit</button></td>
            </form>
            </tr>';
        }
        return $output;
    }

    public function addExtraInfo(){
        if (isset($_POST['info'])) {
            return '<input type="text" name="extra_info" class="addExtraInfo" placeholder="extra info"></input>';
        }
    }

    public function __destruct()
    {
        $this->dbh->close();
    }

}