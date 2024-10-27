<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Book</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXhW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <?php require('reusables/nav.php') ?>
      </div>
    </div>
  </div>
  <?php 
        require('reusables/connect.php');
        $bookID = $_GET['id'];
        $query = "SELECT * FROM books WHERE BookID = '$bookID'";
        $book = mysqli_query($connect, $query);
        $result = $book->fetch_assoc();
      ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="display-4">Update Book: <?php echo $result['Title'] ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
      <form method="POST" action="inc/updateScript.php">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="<?php echo $result['Title']; ?>">
        </div>

        <div class="mb-3">
          <label for="author" class="form-label">Author</label>
          <input type="text" class="form-control" id="author" name="author" value="<?php echo $result['Author']; ?>">
        </div>

        <div class="mb-3">
          <label for="genre" class="form-label">Genre</label>
          <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $result['Genre']; ?>">
        </div>

        <div class="mb-3">
          <label for="publishedYear" class="form-label">Published Year</label>
          <input type="text" class="form-control" id="publishedYear" name="publishedYear" value="<?php echo $result['PublishedYear']; ?>">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" class="form-control" id="price" name="price" value="<?php echo $result['Price']; ?>">
        </div>
        
        <input type="hidden" name="id" value="<?php echo $result['BookID'] ?>">

        <button type="submit" class="btn btn-primary" name="updateBook">Submit</button>

      </form>
      </div>
    </div>
  </div>
</body>
</html>
