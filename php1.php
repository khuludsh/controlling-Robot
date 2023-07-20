<?php
 $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "direction";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Direction ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

  if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            
            $_SESSION["lastInsertedValue"] = $row["Direction"];
			echo "<br>last insert value is : <br>";
			echo $_SESSION["lastInsertedValue"];
        }
    } else {
        echo "No results";
    }

    $conn->close();

    
?>