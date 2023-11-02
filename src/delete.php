<?php
require('koneksi.php');

if (isset($_GET["id"])) {
    $bookId = $_GET["id"];

    $sql = "DELETE FROM books WHERE id=$bookId";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        echo "<br>< <a href=\"index.php\">Home</a>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request";
}

$conn->close();
?>
