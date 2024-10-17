<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Learning Php</h1>
    <?php
        // Lab 1 Assignment
         $breakfast = "Banana, Apples and Oats";
         $lunch = "Fish, Chicken and Vegetables";
         $dinner= "Steak, Carrots and Broccoli";
         $time = rand(0,23);

         echo $time;
       
         if($time >= 5 && $time <= 9 ){
            echo "<h2>This animal should eat " . $breakfast; "</h2>";
         }elseif($time >= 12 && $time <= 14 ){
            echo "<h2>This animal should eat " . $lunch; "</h2>";
         }elseif($time >= 19 && $time <= 21 ){
            echo "<h2>This animal should eat " . $dinner; "</h2>";
         }



         // Lab 2 Assignment
         $userInput = 15;
         $magicNumber1 = "Fizz";
         $magicNumber2 = "Buzz";
         $magicNumber3 = "FizzBuzz";

         if($userInput % 3 == 0){
            echo "<h2>The magic number is: " . $magicNumber1; "</h2>";
         }elseif($userInput % 5 == 0){
            echo "<h2>The magic number is: " . $magicNumber2; "</h2>";
         }elseif($userInput % 3 == 0 && $userInput % 5 == 0){
            echo "<h2>The magic number is: " . $magicNumber3; "</h2>";
         }else{
            echo "<h2>The magic number is: " . $userInput; "</h2>";
         }
    ?>
</body>
</html>