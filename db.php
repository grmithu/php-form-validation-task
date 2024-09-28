<?php

// Hostname, Username, User Password, DB Name
$conn = mysqli_connect("localhost", "root", "", "phptask");

if($conn)
{
	// echo "Server Connection Established";
}
else{
	die("Mysql Connection Error. " . mysqli_error($conn) );
}

