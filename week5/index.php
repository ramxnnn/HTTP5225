<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Display</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .color-box {
            height: 100px; 
            color: white; 
            display: flex; 
            align-items: center;
            justify-content: center; 
            font-weight: bold; 
            border-radius: 5px; 
            margin-bottom: 15px; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Color Palette</h1>
        <?php
        $connect = mysqli_connect(
            'localhost', 
            'root', 
            'root', 
            'HTTP5225F24'
        );

        if(!$connect) {
            echo '<div class="alert alert-danger">Error Code: ' . mysqli_connect_errno() . '<br>Error Message: ' . mysqli_connect_error() . '</div>';
            exit;
        }

        $query = 'SELECT `Name`, `Hex` FROM colors';

        $results = mysqli_query($connect, $query);

        if(!$results) {
            echo '<div class="alert alert-danger">Error Message: ' . mysqli_error($connect) . '</div>';
        } else {
            echo '<div class="alert alert-success">The query found: ' . mysqli_num_rows($results) . ' colors.</div>';
            $colors = mysqli_fetch_all($results, MYSQLI_ASSOC);

            foreach ($colors as $row) {
                $colorName = $row['Name']; 
                $colorHex = $row['Hex']; 
                
                echo '<div class="color-box" style="background-color: ' . $colorHex . ';">' . $colorName . '</div>';
            }
        }
        mysqli_close($connect); 
        ?>
    </div>
</body>
</html>
