<?php
//This is your Database connection file. You may use this file or create your own.
//Never code your normal user name and password into your database connection file.
//Keep the password contained in this file private.

$conn = new mysqli('localhost', '_MJessil', 'WZu6LCtKnpfdpjT5', 'MJessil_13dit_iterationproject_MJessil');
if($conn->connect_error){
	die("Error Connecting to Database: " . $conn->connect_error);
}
?>