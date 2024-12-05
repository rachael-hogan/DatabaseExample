<?php
namespace Rachaelhogan\DatabaseExample;
use mysqli;

require __DIR__ . '/../vendor/autoload.php';

$servername = "localhost";
$username = "root";
$password = "password1";
$dbname = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create an instance of the User class
$user = new User('localhost', 'my_user', 'my_password', 'my_database');

// Add a new user
$user->addUser('Tom', 'Smith', 'tom.smith@example.com');

// Create an instance of the User class
$user = new User('localhost', 'my_user', 'my_password', 'my_database');

// Retrieve and display all users
$user->getUsers();




