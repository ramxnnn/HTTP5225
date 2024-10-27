<?php
require('../reusables/connect.php');

if (isset($_POST['id'])) {
    $bookID = $_POST['id'];

    $query = "DELETE FROM books WHERE BookID = '$bookID'";

    if (mysqli_query($connect, $query)) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>
