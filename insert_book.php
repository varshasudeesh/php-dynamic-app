<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year_published = $_POST['year_published'];
    $isbn = $_POST['isbn'];

    $sql = "INSERT INTO books (title, author, year_published, isbn)
            VALUES ('$title', '$author', '$year_published', '$isbn')";

    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
