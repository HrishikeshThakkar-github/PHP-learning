<?php


/*
//mysqli -- obejct oriented
$servername = "localhost";
$username = "root";
$password = "Simform@123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
//THrow error if not connected
if ($conn->connect_error ) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/

/*
//connection using pdo
$servername ="localhost";
$username="root";
$password="Simform@123";


try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  //Configures PDO to throw exceptions on errors instead of failing silently.
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//close the connection
$conn = null;

*/
/*
//creating database with mysqli
$servername = "localhost";
$username = "root";
$password = "Simform@123";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}



*/

$servername = "localhost";
$username = "root";
$password = "Simform@123";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
/*
// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
*/

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com'),('Mary', 'Moe', 'mary@example.com'),('Julie', 'Dooley', 'julie@example.com');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//$conn->close();

?>

