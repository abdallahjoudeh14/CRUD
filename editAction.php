<!DOCTYPE html>
<html>

<head>
	<meta content="charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css">
	<title>Add Data</title>
</head>


<body>
	<section>

		<?php
		// Include the database connection file
		require_once("dbConnection.php");

		if (isset($_POST['update'])) {
			// Escape special characters in a string for use in an SQL statement
			$id = $_POST['id'];
			$name = $_POST['name'];
			$age = $_POST['age'];
			$email = $_POST['email'];

			// Check for empty fields
			if (empty($name) || empty($age) || empty($email)) {
				if (empty($name)) {
					echo "<div class='alert alert-danger'>Name field is empty.</div>";
				}

				if (empty($age)) {
					echo "<div class='alert alert-danger'>Age field is empty.</div>";
				}

				if (empty($email)) {
					echo "<div class='alert alert-danger'>Email field is empty.</div>";
				}
			} else {
				// Update the database table
				$result = mysqli_query($mysqli, "UPDATE users SET `name` = '$name', `age` = '$age', `email` = '$email' WHERE `id` = $id");

				// Display success message
				echo "<div class='alert alert-success'>Data updated successfully!</div>";
				echo "<a href='index.php' class='button btn-primary'>View Result</a>";
			}
		}
		?>
	</section>
</body>