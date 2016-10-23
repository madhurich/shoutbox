<?php include 'database.php'; ?>
<?php 
	if(isset($_POST['name']) && isset($_POST['shout'])){
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$shout = mysqli_real_escape_string($con, $_POST['shout']);
		$date = mysqli_real_escape_string($con, $_POST['date']);

		$query = "INSERT INTO shouts (name, scream, datetoday) VALUES ('$name', '$shout', '$date')";

		if(!mysqli_query($con, $query)){
			echo 'There is an error '.mysqli_error($con);
		}else{
			echo '<li>Your name is<span class="enter">'.$name.' </span>and you shouted <span class="enter">'.$shout.' </span> on '.$date. '</li>'; 
		}
	}
