<?php
require('../reusables/connect.php');

if (isset($_POST['addBook'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $publishedYear = $_POST['publishedYear'];
    $price = $_POST['price'];

    $query = "INSERT INTO books (Title, Author, Genre, PublishedYear, Price) VALUES ('$title', '$author', '$genre', '$publishedYear', '$price')";

    if (mysqli_query($connect, $query)) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>
