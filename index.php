<?php include 'database.php'; ?>
<?php
	// Create Select Query
	$query = "SELECT * FROM shouts ORDER BY id DESC";
	$shouts = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>shout box</title>
	<link href="https://fonts.googleapis.com/css?family=Mogra" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	
</head>
<body>
	<div class="container">
		<header><h1>My Shoutbox</h1></header>
		<div id="shouts">
			<ul>
				<?php while($row = mysqli_fetch_assoc($shouts)) : ?>
						<li><?php echo $row['id']; ?><span id="id1"><?php echo $row['name']; ?></span>: <span id="id2"><?php echo $row['scream']; ?></span><?php echo $row['datetoday']; ?></li>
					<?php endwhile; ?>
			</ul>
		</div>
		<div>
			<footer>
				<form>
					<label>Name :</label>
					<input type="text" id="name">
					<label>Scream!!</label>
					<input type="text" id="shout-here">
					<input type="submit" id="shout" value="SCREAM!">
				</form>
			</footer>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>