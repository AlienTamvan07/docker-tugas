<?php
require("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $bookName = $_POST["book_name"];
    $bookId = $_POST["id"];

    $sql = "UPDATE books SET book_name='$bookName' WHERE id=$bookId";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        echo "<br>< <a href=\"index.php\">Home</a>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_GET["id"])) {
    $bookId = $_GET["id"];

    $sql = "SELECT id, book_name FROM books WHERE id=$bookId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $bookId = $row["id"];
        $bookName = $row["book_name"];
    } else {
        echo "Book not found";
        exit();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <h2>Edit Book</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $bookId; ?>">
        <label for="book_name">Book Name:</label>
        <input type="text" id="book_name" name="book_name" value="<?php echo $bookName; ?>" required><br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
