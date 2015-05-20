<?php
	include 'connexion.php';

	$ajaxData = '';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id_photo, url, img, caption, user, user_photo, date_photo, state, added_time 
		FROM instafeed
		WHERE state = 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $data = "";
    while($row = $result->fetch_assoc()) {
    	$data .= '<li>';
    	$data .= '<a class="animation" href="'. $row["url"] .'" targer="_blank">';
    	$data .= '<img src="'. $row["img"] .'" />';
    	$data .= '</a>';
    	$data .= '</li>';
    }
    $ajaxData = $data;
} else {
    $ajaxData = '<h2>Il n\'y a pas de photos à montrer.</h2>';
}
	
	echo $ajaxData;

$conn->close();
?>