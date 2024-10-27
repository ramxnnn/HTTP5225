<?php
require('../reusables/connect.php');

if (isset($_POST['updateBook'])) {
    $bookID = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $publishedYear = $_POST['publishedYear'];
    $price = $_POST['price'];

    $query = "UPDATE books SET Title = '$title', Author = '$author', Genre = '$genre', PublishedYear = '$publishedYear', Price = '$price' WHERE BookID = '$bookID'";

    if (mysqli_query($connect, $query)) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>
