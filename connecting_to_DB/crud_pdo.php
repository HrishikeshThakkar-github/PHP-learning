<?php 

$dsn ="mysql:host=localhost;dbname=pdo_demo;charset=utf8mb4";
$username = "root";
$password = "Simform@123";


try{
    $pdo = new PDO($dsn,$username,$password);
    // in the pdo object there are options
    /*
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Exception-based error reporting
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch as associative arrays
        PDO::ATTR_EMULATE_PREPARES   => false,                 // Use real prepared statements
        PDO::ATTR_PERSISTENT         => false,                 // Disable persistent connection
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"    // Set UTF-8 encoding
    ]; */
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Throws exceptions (Best practice)
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);   // Issues warnings
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);    // No error reporting (not recommended)

    echo "connected successfully";
}catch(PDOException $e){
    die("connection failed : ".$e->getMessage());
}

/*
//simple query using query()
$query = "SELECT * FROM users";
$result = $pdo->query($query); // Execute query

// Fetch results
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
}
?>
//Explanation
//$pdo->query($query) → Executes the query and returns a PDOStatement object.

//$result->fetch(PDO::FETCH_ASSOC) → Fetches one row at a time as an associative array.

//while ($row = $result->fetch(...)) → Iterates through all rows.



$result = $pdo->query("SELECT * FROM users");

// Fetch as an associative array
$data = $result->fetch(PDO::FETCH_ASSOC);
print_r($data);

// Fetch as an object
$data = $result->fetch(PDO::FETCH_OBJ);
echo "User Name: " . $data->name;

// Fetch all results at once
$allUsers = $result->fetchAll(PDO::FETCH_ASSOC);
print_r($allUsers);


//✔️ query() → Used for simple queries without user input.
//✔️ prepare() → Prepares a query before execution (security & performance).
//✔️ execute() → Binds values and runs the prepared query.
//✔️ Always use prepared statements for queries with user input to prevent SQL injection.

Would you like to practice with real-world examples next? 🚀
*/


?>