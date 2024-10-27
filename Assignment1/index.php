<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Management System</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/style.css">
</head>
<body>
  <div class="container-fluid bg-light py-5">
    <div class="row">
      <div class="col text-center">
        <h1 class="display-4">Welcome to the Book Management System</h1>
        <p class="lead">Manage your book collection efficiently.</p>
        <a href="add.php" class="btn btn-primary btn-lg">Add a New Book</a>
      </div>
    </div>
  </div>

  <div class="container">
    <h2 class="text-center my-4">Current Books</h2>
    <div class="row">
      <?php 
        require('reusables/connect.php');
        $query  = 'SELECT * FROM books';
        $books = mysqli_query($connect, $query);

        foreach($books as $book) {
          // Dynamically set the image name based on the BookID
          $imageName = 'public/img/' . $book['BookID'] . '.jpg';
          
          echo '<div class="col-md-4 mb-4">
                  <div class="card">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="' . $imageName . '" class="img-fluid rounded-start" alt="Book Cover">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">' . $book['Title'] . '</h5>
                          <p class="card-text"><strong>Author:</strong> ' . $book['Author'] . '</p>
                          <p class="card-text"><strong>Genre:</strong> ' . $book['Genre'] . '</p>
                          <p class="card-text"><strong>Published Year:</strong> ' . $book['PublishedYear'] . '</p>
                          <p class="card-text"><strong>Price:</strong> $' . number_format($book['Price'], 2) . '</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>';
        }
      ?>
    </div>
  </div>

  <footer class="text-center py-3">
    <p>&copy; <?php echo date("Y"); ?> Book Management System</p>
  </footer>
</body>
</html>
