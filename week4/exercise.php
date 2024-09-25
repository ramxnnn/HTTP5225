<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();


echo '<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-purple {
            background-color: purple;
            color: white;
        }
    </style>
    <title>User Information</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">';

// Loop through the users using a for loop and output in a single echo statement
for ($i = 0; $i < count($users); $i++) {
    $user = $users[$i];
    echo '<div class="card" style="width: 18rem; margin: 15px;">
            <div class="card-body">
                <h5 class="card-title">' . $user['name'] . '</h5>
                <p class="card-text">Username: ' . $user['username'] . '</p>
                <p class="card-text">Email: ' . $user['email'] . '</p>
                <p class="card-text">Phone: ' . $user['phone'] . '</p>
                <p class="card-text">Company: ' . $user['company']['name'] . '</p>
                <a href="http://' . $user['website'] . '" class="btn btn-purple">Visit Website</a>
            </div>
          </div>';
}

echo '    </div>
</div>
</body>
</html>';
?>
