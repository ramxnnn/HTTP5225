<?php
  include('reusables/connect.php');
  
  if(isset($_POST['loginButton'])){
    $query = 'SELECT * 
              FROM users
              WHERE email = XXX
              AND password = XXX
              LIMIT 1';
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <h2 class="display-3">Login</h2>

          <form>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary" name="loginButton">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>  

</body>
</html>