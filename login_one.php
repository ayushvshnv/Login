<?php  
 include "config.php";
 
 //session_start();
 

if (isset($_POST['username']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){

echo "Welcome " .$username;
$_SESSION['login_user']= $username; 
header('Location: home.php');
echo $_SESSION['login_user'];
//echo $_SESSION['username'];
//echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
//header('Location: home.php');
}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
