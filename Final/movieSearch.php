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
		Search: <input type="text" name="search">
		<button name="byTitle">By Title</button>
		<button name="byGenre">By Genre</button>
		<button name="byLength">By Length</button>
		<button name="byDirector">By Director</button>
	</form>
	<form action="admin.php" method="post">
		<button type="submit">Admin</button>
	</form>
	<?php
	//Connect to database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "horrormovies";
	$search = $_POST['search'];

	$selection = "";

	if (isset($_POST["byTitle"])) {
		$selection = "title";
	} else if (isset($_POST["byGenre"])) {
		$selection = "genre.name";
	} else if (isset($_POST["byLength"])) {
		$selection = "length";
	} else if (isset($_POST["byDirector"])) {
		$selection = "director";
	}
	

	// Add code for query
	$conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo ("Connected successfully");
	$sql = $conn->prepare("SELECT title, genre.name, length, year, rating.type, director FROM movies JOIN genre ON movies.genre_id = genre.id JOIN rating ON movies.rating = rating.id WHERE $selection LIKE ?;");
	$sql->execute(["%$search%"]);
	$q = $sql->fetchAll();

	?>

	<table class="table table-bordered table-condensed">
		<tr>
			<td>Title</td>
			<td>Genre</td>
			<td>Length</td>
			<td>Year</td>
			<td>Rating</td>
			<td>Director</td>
		</tr>
		<?php foreach ($q as $r) {
			echo "<tr><td>{$r['title']}</td><td>{$r['name']}</td><td>{$r['length']} minutes</td><td>{$r['year']}</td><td>{$r['type']}</td><td>{$r['director']}</td></tr>";
		} ?>
	</table>
</body>

</html>