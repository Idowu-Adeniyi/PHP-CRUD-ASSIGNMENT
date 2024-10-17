<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
         //connection string
        $connect = mysqli_connect('localhost', 'root', 'root', 'http5225' );

        if(!$connect){
            echo 'Error Code: ' . mysqli_connect_errno();
            echo 'Error Message: ' . mysqli_connect_error();
            exit;
        }
        // query
        $query = 'SELECT `Name`, `Hex` FROM `TABLE 1`';

        // run query    
        $results = mysqli_query($connect, $query);

        if(!$results){
            echo 'Error Message: ' . mysqli_error($connect);
        }else {
            echo 'The query found the following number of results: ' . mysqli_num_rows($results);
        }
        

            echo '<div style="text-align:center;">'; // Wrapper div to centralize content

                foreach ($results as $result) {
                $name = $result['Name'];   // Name of the color
                $color = $result['Hex']; // Hex code of the color (e.g., #FF5733)

                // Output the name, hex code, and the colored div
                echo '<div style="background-color:' . $color . '; width:50%; height:100px; margin: 10px auto; padding: 10px; text-align: center; color: white;">';
                echo '<strong>Color Name:</strong> ' . $name . '<br>';
                echo '<strong>Hex Code:</strong> ' . $color;
                echo '</div>';
            }

            echo '</div>'; // End of wrapper div

    ?>
</body>
</html>