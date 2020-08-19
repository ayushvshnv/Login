<?php
include "config.php";

$username = $_POST['username']; 
$password = $_POST['password']; 


$sql = "INSERT INTO users (username, password)
VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "Registered Successfully";
  $_SESSION['login_user']= $username; 
  header('Location: home.php');

} else {
  echo "Error:  <br>" . $conn->error;
  echo "<h3><a href='index.php'>Try Again</a></h3>";
}

$conn->close();

?>
