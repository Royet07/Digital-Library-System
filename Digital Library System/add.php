<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add']))
	{
		$isbn = $_POST['isbn'];
		$title =  $_POST['title'];
		$author = 	 $_POST['author'];
		$category = 	 $_POST['category'];
		$price = 	 $_POST['price'];
		$copies = 	 $_POST['copies'];
		$book_file = 	 $_POST['book_file'];

		$sql = "INSERT INTO book (isbn, title, author, category, price, copies, book_file) VALUES ('$isbn', '$title', '$author','$category','$price','$copies','$book_file')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: home.php');
?>