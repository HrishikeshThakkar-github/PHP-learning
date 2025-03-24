<?php

session_start();
 
$name=$_POST["name"];
$_SESSION["username"]=$name;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>