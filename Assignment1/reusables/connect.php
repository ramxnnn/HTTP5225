<?php
$connect = mysqli_connect(
    'localhost', 
    'root', 
    'root', 
    'books' 
);

if (!$connect) {
    echo "Connection Failed: " . mysqli_connect_error();
}
?>
