<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap_4/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/font/font.css">
	</head>

	<body>
		<?php require_once 'process.php'; ?>

		<?php 
			if (isset($_SESSION['message'])):
		?>

		<div class="alert alert-<?=$_SESSION['mssg_type']?>">
			<?php 
				echo $_SESSION['message'];
				unset ($_SESSION['message']);
			?>
		</div>

		<?php 
			endif
		?>

		<?php 
			$mysqli = new mysqli('localhost', 'phpmyadmin', 'root', 'crudassignment') or die(mysqli_error($mysqli));

			$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
		?>

		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Name</h1>
				</div>
				<div class="col-md-4">
					<h1>Location</h1>
				</div>
				<div class="col-md-4">
					<h1>Action</h1>
				</div>
			</div>
		</div>

		<div class="container">
			<?php 
				while ($row = $result->fetch_assoc()):
			?>
			<div class="row">
				<div class="col-md-4">
					<p>
						<?php echo $row['name']; ?>
					</p>
				</div>

				<div class="col-md-4">
					<p>
						<?php echo $row['location']; ?>
					</p>
				</div>

				<div class="col-md-4">
					<a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">
						Edit
					</a>

					<a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">
						Delete
					</a>
				</div>
			</div>
			<?php
				endwhile;
			?>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main_body">
						<form method="POST" action="process.php">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
						  	<div class="form-group">
							    <label for="">Name</label>
							    <input value="<?php echo $name; ?>" type="text" class="form-control" name="name" aria-describedby="nameHelp">
						  	</div>

						  	<div class="form-group">
							    <label for="">Location</label>
							    <input value="<?php echo $location; ?>" type="text" class="form-control" name="location">
						  	</div>

						  	<?php 
						  		if ($update == true):
						  	?>

						  	<button type="submit" class="btn btn-info" name="update">Update</button>
							
							<?php 
								else:
							?>
						  	<button type="submit" class="btn btn-primary" name="save">Save</button>

						  	<?php 
						  		endif;
						  	?>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="css/bootstrap_4/js/bootstrap.min.js"></script>
	</body>
</html>