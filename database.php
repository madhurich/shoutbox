<?php

//connection to MySQL
$con = mysqli_connect("localhost", "root", "Password123", "jsshoutbox");
if(mysqli_connect_errno()){
	echo "failed to connect to database : ".mysqli_connect_error();
}

?>