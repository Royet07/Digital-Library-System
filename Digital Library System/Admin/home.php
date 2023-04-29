<?php
	session_start();

	if(!isset($_SESSION['admin_id']))
	{
		echo "<script type='text/javascript'> document.location ='./login-user.php'; </script>";
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Digital Library System</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
		.txt{
			font-weight: 400;
		}
		.nav{
			height: 8rem;
			background-color: #01A5C8;
			display: flex;
			width: 100vw;
			justify-content: space-around;
		}
		.mt{
			margin-top: 0.5rem;
			margin-bottom: o.5rem;
		}
	</style>
</head>
<body>
<nav class="nav">
	<div class="row form-group col-md-12">
		<div class="col-md-6">
			<h1 class="text-center">Digital Library System</h1>
		</div>
	</div>
	<div class="row form-group col-md-6">
		<div class="col-md-8">
			<h3 class="text-center">Hello, <?php echo $_SESSION['username']; ?></h3>
		</div>
		<div class="col-md-4" style="height: 100%; text-align: center; padding-top: 2rem;">
			<a href="../logout.php" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
		</div>
	</div>
</nav>
<div class="container col-md-12" style="margin-top: 6rem;">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New Book</a>
				<!-- <a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a> -->
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>ISBN</th>
						<th>Title</th>
						<th>Author</th>
						<th>Category</th>
						<th>Price</th>
						<th>Copies</th>
						<th>Book File</th>
						<th>Actions</th>
					</thead>
					<tbody>
						<?php
							include_once('../connection.php');
							$sql = "SELECT * FROM book";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['isbn']."</td>
									<td>".$row['title']."</td>
									<td>".$row['author']."</td>
									<td>".$row['category']."</td>
									<td>".$row['price']."</td>
									<td>".$row['copies']."</td>
									<td>".$row['book_file']."</td>
									<td>
										<a href='#edit_".$row['id']."' class='btn btn-success btn-sm mt' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
										<a href='#download_".$row['id']."' class='btn btn-info btn-sm mt' data-toggle='modal'><span class='glyphicon glyphicon-download-alt'></span> Download File</a>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm mt' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('./add_modal.php') ?>

<script src="../jquery/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../datatable/jquery.dataTables.min.js"></script>
<script src="../datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>