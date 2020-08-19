<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "mydb";


$googleappid = "692061859358-tke14crhe9stkog8d756lfae5g7o4s5k.apps.googleusercontent.com"; 
$googleappsecret = "JRPtuM6FDlugsc8IUZ_DJAqC"; 
$redirectURL = "http://localhost/Assignment2/authenticate.php"; 



$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include_once 'src/Google/Google_Client.php';
include_once 'src/Google/contrib/Google_Oauth2Service.php';

$googleClient = new Google_Client();
$googleClient->setApplicationName('Assignment');
$googleClient->setClientId($googleappid);
$googleClient->setClientSecret($googleappsecret);
$googleClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($googleClient);

?>