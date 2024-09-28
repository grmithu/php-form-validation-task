<?php


// Hostname, Username, User Password, DB Name
$conn = mysqli_connect("localhost", "root", "", "phptask");

if($conn)
{
	echo "Server Connection Established";
}
else{
	die("Mysql Connection Error. " . mysqli_error($conn) );
}


// Database connection
// $host = 'localhost';
// $user = 'root';
// $password = '';
// $dbname = 'phptask';
// $conn = mysqli_connect($host, $user, $password, $dbname);


// if(!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

