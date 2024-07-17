<!-- <
$sname = "localhost";
$uname = "root";
$password = "root";

$db_name = "delsolo";


$port = 3308; 

// $conn = mysql_connect($host.':'.$port, $username, $password);
// $db=mysql_select_db($database,$conn);
$conn = mysqli_connect($sname,$port ,$uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
else
echo "Connection ok!";
? -->
<?php
    // // Begin Vault (this is in a vault, not actually hard-coded)
    // $host="localhost";
    // $username="root";
    // $password="root";
    // $dbname="delsolo";
    // $port="3306";
    // // End Vault

    // try {
    //     $dbh = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    //     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "I am connected.<br/>";

    //     // ... continue with your code

    //     // PDO closes connection at end of script
    // } catch (PDOException $e) {
    //     echo 'PDO Exception: ' . $e->getMessage();
    //     exit();
    
    

// MySQL database credentials

$servername = "localhost";
$database = "delsolo";
$username = "root";
$password = "root";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
mysqli_close($conn);

?>