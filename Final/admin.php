<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Horror Movies</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<form action="finalProject.php" method="post">
		<button type="submit">Back</button>
	</form>
	<form action="admin.php" method="post" id="form">
		<button type="submit" name="update" onclick="onUpdate()">Update</button>
		<button name="add" onclick="onAdd()" type="submit">Add</button>
		<button name="del" onclick="onDelete()">Delete</button>
		<input type="hidden" name="getInput" id="input">
		<input type="hidden" name="title" id="title">
		<input type="hidden" name="length" id="length">
		<input type="hidden" name="year" id="year">
		<input type="hidden" name="genreid" id="genreid">
		<input type="hidden" name="rating" id="rating">
		<input type="hidden" name="director" id="director">
	</form>
	<script>
		// document.onsubmit = function() {
		// 	let userInput = prompt("Enter Id: ");
		// 	document.getElementById("input").value = userInput;
		// }
		function onDelete() {
			let userInput = prompt("Enter Id: ");
			document.getElementById("input").value = userInput;
		}

		function onUpdate() {
			let userInput = prompt("Enter Id: ");
			document.getElementById("input").value = userInput;

			let title = prompt("Enter item to change: ");
			document.getElementById("title").value = title;
		}

		function onAdd() {
			let title = prompt("Enter title: ");
			document.getElementById("title").value = title;

			let userInput = prompt("Enter Id: ");
			document.getElementById("input").value = userInput;

			let length = prompt("Enter length: ");
			document.getElementById("length").value = length;

			let year = prompt("Enter year: ");
			document.getElementById("year").value = year;

			let genreid = prompt("Enter Genre Id: ");
			document.getElementById("genreid").value = genreid;

			let rating = prompt("Enter rating: ");
			document.getElementById("rating").value = rating;

			let director = prompt("Enter director: ");
			document.getElementById("director").value = director;
		}
	</script>
	<?php

	//Connect to database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "horrormovies";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	
	

	echo("Connected successfully");
	if (isset($_POST['del'])) {
		$id =  $_POST["getInput"];
		$sql = "DELETE FROM movies WHERE movie_id = $id";

		if ($conn->query($sql) === TRUE) {
			echo "Movie deleted successfully";
		} else {
			echo "Failed to delete movie";
		}
		
	}
	
	if (isset($_POST['update'])) {
		$id =  $_POST["getInput"];
		$title = $_POST["title"];
		$sql = "UPDATE movies SET title = '$title' WHERE movie_id = $id";

		if ($conn->query($sql) === TRUE) {
			echo "Movie updated successfully";
		} else {
			echo "Failed to update movie";
		}
		
	}

	if (isset($_POST['add'])) {
		$title = $_POST["title"];
		$id = $_POST["getInput"];
		$length = $_POST["length"];
		$year = $_POST["year"];
		$genreid = $_POST["genreid"];
		$rating = $_POST["rating"];
		$director = $_POST["director"];

		$sql = "INSERT INTO movies (title, movie_id, length, year, genre_id, rating, director)
		VALUES ('$title', '$id', '$length', '$year', '$genreid', '$rating', '$director')";

		if ($conn->query($sql) === TRUE) {
			echo "Movie successfully added";
		} else {
			echo "Failed to add movie";
		}
	}

	?>

	<!-- <table class="table table-bordered table-condensed">
		<tr>
			<td>Title</td>
			<td>Movie Id</td>
			<td>Length</td>
			<td>Year</td>
			<td>Genre Id</td>
			<td>Rating Id</td>
			<td>Director</td>
		</tr>
		<?php foreach ($q as $r) {
			echo "<tr><td>{$r['title']}</td><td>{$r['movie_id']}</td><td>{$r['length']}</td><td>{$r['year']}</td><td>{$r['genre_id']}</td><td>{$r['rating']}</td><td>{$r['director']}</td></tr>";
		} ?> -->
	</table>
</body>

</html>