<?php
require('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nama buku dari form
    $bookName = $_POST["book_name"];

    // Insert book name ke database
    $sql = "INSERT INTO books (book_name) VALUES ('$bookName')";


    // Kondisional, jika true makan tampilkan pesan, jika error tampilkan error
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>
<body>
    <h2>Add New Book</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="book_name">Book Name:</label>
        <input type="text" id="book_name" name="book_name" required><br><br>
        <input type="submit" value="Add Book">
    </form>
    <br>
    <a href="index.php">Back to Book List</a>
</body>
</html>
