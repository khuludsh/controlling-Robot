<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "direction";
	
    $x= " "; 
    

    $conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['left'])){
	echo "Tho Robot will go to the left";
	$x="left";	
}

if(isset($_POST['right'])){
	echo "Tho Robot will go to the right";
	$x="right";
	
}
if(isset($_POST['back'])){
	echo "Tho Robot will go to the back";
	$x="back";
	
}
if(isset($_POST['forward'])){
	echo "Tho Robot will go to the forward";
	$x="forward";
	
}
if(isset($_POST['stop'])){
	echo "Tho Robot will go to the stop";
	$x="stop";
	
}

$sql = "INSERT INTO direction (Direction)
VALUES ('$x')";

if ($conn->query($sql) === TRUE) {
  echo " New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();	

?>