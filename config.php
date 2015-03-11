<!--<?php #My SQL
$servername = "localhost";
$username = "root";
$password = "onegai123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
#echo "Connected successfully";
?>-->
<?php #My SQLi
$servername = "localhost";
$username = "root";
$password = "onegai123";
$dbname = "dbol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
#echo "Connected successfully";

#$conn->close();
?>
