<?php
$server = 'localhost';
$user = 'Keo';
$pass = 'PHg22eKvQRPj6b';
$db = 'mysql_les1';

$dbh = new mysqli($server, $user, $pass, $db);
if ($dbh->connect_error){
	die('Verbinden mislukt: '.$dbh->connect_error);
}else{
    echo 'Verbonden met de database';
}


$dropStudents = "DROP TABLE students";
$result = $dbh->query($dropStudents);

// Check if the table exists
$tableExists = $dbh->query("SHOW TABLES LIKE 'students'");
if ($tableExists->num_rows > 0) {
    echo "Table 'students' already exists.";
} else {
    echo "Table 'students' does not exist.";
}

// Create the table
$addTableStudents = "CREATE TABLE students (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT(3) NOT NULL
)";
$result = $dbh->query($addTableStudents);

// insert students
$dbh->query("INSERT INTO students (name, age) VALUES ('John Doe', FLOOR(RAND() * (67 - 16 + 1)) + 16)");
$dbh->query("INSERT INTO students (name, age) VALUES ('Jane Smith', FLOOR(RAND() * (67 - 16 + 1)) + 16)");
$dbh->query("INSERT INTO students (name, age) VALUES ('Alice Johnson', FLOOR(RAND() * (67 - 16 + 1)) + 16)");

// delete a student
$deleteStdudent = "DELETE FROM students WHERE name = 'Jane Smith'";
$result = $dbh->query($deleteStdudent);
if ($result) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $dbh->error;
}

$dbh->close();
?>
