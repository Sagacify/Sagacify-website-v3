<?php
	include 'connexion.php';

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	/* Get informations from database */
	$sql = "SELECT id_photo FROM instafeed ORDER BY `instafeed`.`added_time` ASC";
	$result = $conn->query($sql);
	$ajaxresult = '';

	/* If we have something */
	if ($result->num_rows > 0) {
	    // output data of each row
	    $feed_image = array();
	    while($row = $result->fetch_assoc()) {
	        array_push($feed_image, $row["id_photo"]);
	    }
	    $ajaxresult = json_encode($feed_image);
	/* if not */
	} else {
	    $ajaxresult =  0;
	}

	echo $ajaxresult;

	$conn->close();
?>