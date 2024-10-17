<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops and Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Loops and Bootstrap</h1>
        <div class="row">
        <?php
            // Function to fetch user data from the JSONPlaceholder API
            function getUsers() {
               $url = "https://jsonplaceholder.typicode.com/users";
               $data = file_get_contents($url);
               return json_decode($data, true);
            }

            // Get the list of users
            $users = getUsers();

            // Loop through each user and create a card
            foreach($users as $user){
                echo '<div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body"> 
                            <h5 class="card-title">' . $user['name'] .'</h5>
                            <p class="card-text">Username: ' . $user['username'] . '</p>
                            <p class="card-text">Email: ' . $user['email'] . '</p>
                            <p class="card-text">
                                Address:<br>
                                ' . $user['address']['suite'] . '<br>
                                ' . $user['address']['street'] . '<br>
                                ' . $user['address']['city'] . '<br>
                                ' . $user['address']['zipcode'] . '
                            </p>
                            <a href="http://' . $user['website'] . '" class="btn btn-primary" target="_blank">Visit Website</a>
                        </div>
                    </div>  
                </div>';
            }
        ?>
        </div>
    </div>