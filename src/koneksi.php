<?php
// Koneksi DB
// $servername sesuai dengan nama mysql di docker-compose.yml
//
$servername = "mysql-db"; // MySQL server address
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "books"; // MySQL database name


// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    throw new Exception("Connection failed: " . $conn->connect_error);
}

?>