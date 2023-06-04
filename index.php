<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>

<head>
	<meta content="charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css">
	<title>Homepage</title>
</head>

<body>
	<section>
		<h2>Homepage</h2>

		<a href="add.php" class="button btn-primary">Add New Data</a>
		<div class="table-responsive">
			<table width='80%'>
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Age</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// Fetch the next row of a result set as an associative array
					while ($res = mysqli_fetch_assoc($result)) {
						echo "<tr>
								<td>{$res['name']}</td>
								<td>{$res['email']}</td>
								<td>{$res['age']}</td>
								<td><a href=\"edit.php?id=$res[id]\" class='button btn-primary'>Edit</a>&nbsp;&nbsp;
									<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure to delete user')\" class='button btn-danger'>Delete</a></td>
								</tr>";
					}
					?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="2">Total Users</td>
						<td colspan="2"><?php $user_counter = mysqli_query($mysqli, "SELECT id FROM users");
										echo mysqli_num_rows($user_counter) ?></td>
					</tr>
				</tfoot>
			</table>
		</div>
	</section>
</body>

</html>