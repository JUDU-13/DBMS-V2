<?php
	$server="localhost";
	$username="root";
	$password="";
	$database="id19364953_lifelinedb";
	$con =mysqli_connect($server,$username,$password,$database);
	if(!$con){
		echo "Connection Failed";
	}
?>