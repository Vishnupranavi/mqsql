<?php
$servername="localhost";
$username="root";
$password="Weakpass$12";

//connection
$conn=new mysqli($servername,$username,$password);

//check  connection
        if($conn->connect_error){
		die("Connection failed".$conn->connect_error);
	}
	else{
		echo("Connected");
	}
	//create database
	$sql="create database india";
	if($conn->query($sql)=== TRUE){
		echo "Database connected";
		}
	else{
		echo "DB not connected".$conn->error;
		}
$conn->close();
?>

