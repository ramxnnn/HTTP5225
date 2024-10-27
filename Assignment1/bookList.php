<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book List</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script>
    function confirmDelete() {
      return confirm("Are you sure you want to delete this?");
    }
  </script>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <?php require('reusables/nav.php'); ?>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="display-2">Book List</h1>
        <a href="add.php" class="btn btn-success mb-3">Add New Book</a>
      </div>
    </div>
    <div class="row">
      <?php 
        require('reusables/connect.php');
        $query  = 'SELECT * FROM books';
        $books = mysqli_query($connect, $query);

        foreach ($books as $book) {
          echo '<div class="card col-md-4 mb-2">
            <div class="card-body">
              <h5 class="card-title">' . $book['Title'] . '</h5>
              <p class="card-text">Author: ' . $book['Author'] . '</p>
              <p class="card-text">Genre: ' . $book['Genre'] . '</p>
              <p class="card-text">Published Year: ' . $book['PublishedYear'] . '</p>
              <p class="card-text">Price: $' . number_format($book['Price'], 2) . '</p>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col">
                  <form method="GET" action="updateBook.php">
                    <input type="hidden" name="id" value="' . $book['BookID'] . '">
                    <button class="btn btn-sm btn-primary">Update</button>
                  </form>
                </div>
                <div class="col">
                  <form method="POST" action="inc/deleteBook.php" onsubmit="return confirmDelete();">
                    <input type="hidden" name="id" value="' . $book['BookID'] . '">
                    <button class="btn btn-sm btn-danger">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          </div>';
        }
      ?>
    </div>
  </div>
</body>
</html>
