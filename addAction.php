<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="charset=UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Add Data</title>
</head>

<body>
	<section>

		<?php
		// Include the database connection file
		require_once("dbConnection.php");

		if (isset($_POST['submit'])) {
			// Escape special characters in string for use in SQL statement	
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

				// Show link to the previous page
				echo "<a href='javascript:self.history.back();' class='button btn-primary'>Go Back</a>";
			} else {
				// If all the fields are filled (not empty) 

				// Insert data into database
				$result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");

				// Display success message
				echo "<div class='alert alert-success'>Data added successfully!</div>";
				echo "<a href='index.php' class='button btn-primary'>View Result</a>";
			}
		}
		?>
	</section>
</body>

</html>