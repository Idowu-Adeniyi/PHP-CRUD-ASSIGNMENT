<?php
 
  if(isset($_POST['updateSchool'])){
    $schoolID = $_POST['id']; // ID of the school to update
    $schoolName = $_POST['schoolName'];
    $schoolType = $_POST['schoolType'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    require('../reusables/connect.php'); // Database connection

    // Construct the UPDATE query
    $query = "UPDATE `schools` SET 
      `School Name` = '" . mysqli_real_escape_string($connect, $schoolName) ."',
      `School Type` = '" . mysqli_real_escape_string($connect, $schoolType) ."',
      `Phone` = '" . mysqli_real_escape_string($connect, $phone) ."',
      `Email` = '" . mysqli_real_escape_string($connect, $email) ."' 
      WHERE `id` = '" . mysqli_real_escape_string($connect, $schoolID) ."'";

    // Execute the query
    $school = mysqli_query($connect, $query);

    if($school){
      header("Location: ../index.php"); // Redirect on successful update
    } else {
      // Show an error message if the update fails
      echo "There was an error updating the school: " . mysqli_error($connect); 
    }
  }
?>
