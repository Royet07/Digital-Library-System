<?php
	//for MySQLi OOP
	$conn = new mysqli('localhost', 'root', '', 'db_Crud_Books');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}

	$con = new mysqli('localhost', 'root', '', 'db_Crud_Books');
	if($con->connect_error){
	   die("Connection failed: " . $con->connect_error);
	}
	////////////////

	//for MySQLi Procedural
	// $conn = mysqli_connect('localhost', 'root', '', 'mydatabase');
	// if(!$conn){
	//     die("Connection failed: " . mysqli_connect_error());
	// }
	////////////////
?>