<?php
$servername="localhost";
$username="root";
$password="Weakpass$12";
$database="india";

$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	echo "connection failed".$conn->connect_error;
	}
else{
	echo "connected successfully";
	}

//create table
$sql= "CREATE TABLE tamilnadu(
	name varchar(100),
	id varchar(10),
	place varchar(30),
	contact int(10)
	)";
//table creation checking
if($conn->query($sql)===TRUE){
	echo "\nTable created";
	}
	else{
	echo "table not created".$conn->error;
	}*/
//Insert values

$val="INSERT INTO tamilnadu(name,id,place,contact)Values('Vishnu','ACE123','Coimbatore','1234567891'),('pranavi','ACE234','Chennai','1234567891'),('maha','ACE345','kolkatta','1234567891')";

//check values
if($conn->query($val)===TRUE){
	echo "\nValues inserted";
	}
	else{
	echo "not inserted".$conn->error;
	}
	
//prepared and bind
$st = $conn->prepare("INSERT INTO tamilnadu (name, id, place,contact) VALUES ( ?,?, ?, ?)");
$st->bind_param("sssi", $name, $id, $place,$contact);

//declare and execute
$name="rogini";
$id="ACE455";
$place="Delhi";
$contact="123456789";
$st->execute();

echo "New records added";




//update
$li = "UPDATE tamilnadu SET name='Danny' where place='chennai'";

if ($conn->query($li) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


//delete
$del = "DELETE FROM tamilnadu where name='rogini'";

if ($conn->query($del) === TRUE) {
  echo "Deleted sucess";
} else {
  echo "Error in record: " . $conn->error;
}
?>
