<?php
	include 'connexion.php';

	$id_photo = $_POST['id_photo'];
	$state = $_POST['state'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE instafeed SET state = '$state' WHERE id_photo = '$id_photo' ";

if ($conn->query($sql) === TRUE) {
    echo true;
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>