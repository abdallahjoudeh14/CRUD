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
		<fieldset class="wrapper">
			<legend><h2>Add Data</h2></legend>
			<a href="index.php" class="button btn-primary">Home</a>
			<form action="addAction.php" method="post" name="add">
				<div class="form-group">
					<label class="form-label" for="name">Name</label>
					<input type="text" name="name" class="form-input" id="name">
				</div>
				<div class="form-group">
					<label class="form-label" for="email">Email</label>
					<input type="text" name="email" class="form-input" id="email">
				</div>
				<div class="form-group">
					<label class="form-label" for="age">Age</label>
					<input type="text" name="age" class="form-input" id="age">
				</div>
				
				<input type="submit" name="submit" value="Add" class="button btn-primary">
			</form>
		</fieldset>

	</section>

</body>

</html>