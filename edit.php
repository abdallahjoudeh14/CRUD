<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>

<!DOCTYPE html>
<html>

<head>
	<meta content="charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css">
	<title>Edit Data</title>
</head>

<body>
	<section>
		<fieldset class="wrapper">
			<legend>
				<h2>Edit Data</h2>
			</legend>
			<a href="index.php" class="button btn-primary">Home</a>
			<form name="edit" method="post" action="editAction.php">
				<div class="form-group">
					<label class="form-label" for="name">Name</label>
					<input type="text" name="name" class="form-input" id="name" value="<?php echo $name; ?>">
				</div>
				<div class="form-group">
					<label for="email" class="form-label">Email</label>
					<input type="text" name="email" class="form-input" id="email" value="<?php echo $email; ?>">
				</div>
				<div class="form-group">
					<label for="age" class="form-label">Age</label>
					<input type="text" name="age" class="form-input" id="age" value="<?php echo $age; ?>">
				</div>
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input type="submit" name="update" class="button btn-primary" value="Update">
				</table>
			</form>
			</div>
	</section>
</body>

</html>