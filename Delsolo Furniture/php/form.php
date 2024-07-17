<?php


$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";


$sql = "INSERT INTO customers (FullName, emailID, myText)
VALUES ('dad', 'kkk@gnail', 'sdsefdr')";
if(mysqli_query($conn, $sql)){
	echo "Records inserted successfully.";
	} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}


//displaying data
$sql = "SELECT FullName, emailID, myText FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "FullName: " . $row["FullName"]. " - emailID: " . $row["emailID"]. " " .                    $row["myText"]. "<br>";
}
} else {
echo "0 results";
}

mysqli_close($conn);

	?>
	 
	

  
