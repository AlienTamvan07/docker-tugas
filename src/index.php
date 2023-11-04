<?php
/* 
File ini merupakan halaman awal yang berisi table dengan data2 buku yang berada dalam database mysql.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
</head>
<body>
    <h2>Book List</h2>
    <a href="insert.php">Insert Book</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        // menambahkan koneksi.php ke index.php
        include("koneksi.php");
        ?>
        <?php

        // Ambil data di DB
        $sql = "SELECT id, book_name FROM books";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // tampilkan data diidalam DB
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["book_name"]."</td>
                        <td><a href='edit.php?id=".$row["id"]."'>Edit</a></td>
                        <td><a href='delete.php?id=".$row["id"]."'>Delete</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
