<?php
include 'connexion.php';

$mysqli = new mysqli($servername, $username, $password, $dbname);

$id_photo = $_POST['id_photo'];
$url = $_POST['url'];
$img = $_POST['img'];
$img_small = $_POST['img_small'];
$caption =  mysqli_real_escape_string ( $mysqli , $_POST['caption'] );
$user = $_POST['user'];
$user_photo = $_POST['user_photo'];
$date_photo = $_POST['date_photo'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO instafeed (id_photo, url, img, img_small, caption, user, user_photo, date_photo, added_time)
VALUES ('$id_photo', '$url', '$img', '$img_small', '$caption', '$user', '$user_photo', '$date_photo', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>