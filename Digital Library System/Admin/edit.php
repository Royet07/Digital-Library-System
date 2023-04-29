<?php
	session_start();
	include_once('../connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$isbn = $_POST['isbn'];
		$title =  $_POST['title'];
		$author = 	 $_POST['author'];
		$category = 	 $_POST['category'];
		$price = 	 $_POST['price'];
		$copies = 	 $_POST['copies'];
		$book_file = 	 $_POST['book_file'];

		$sql = "UPDATE book SET isbn = '$isbn', title = '$title', author = '$author', category = '$category', price = '$price', copies = '$copies', book_file = '$book_file' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Book to edit first';
	}

	header('location: home.php');

?>