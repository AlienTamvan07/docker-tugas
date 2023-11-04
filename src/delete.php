<?php
require('koneksi.php');

if (isset($_GET["id"])) {
    $bookId = $_GET["id"];

    // Query, jika id ada di dalam database, maka buku di hapus
    $sql = "DELETE FROM books WHERE id=$bookId";

    // Kondisional, jika true maka muncul pesan berhasil, jika tidak, maka error
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
