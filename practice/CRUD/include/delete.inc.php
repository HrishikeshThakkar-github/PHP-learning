
<?php
require_once 'db.con.inc.php';
include('../header.php');
?>

<link rel="stylesheet" href="../style.css">
<?php

if (isset($_GET['id'])) {
    $id = $_GET['id']; 

    // Secure SQL query using a prepared statement
    $query = "DELETE FROM `user` WHERE `id` = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();


    header("Location: ../index.php?message=deleted_successfully");

}

 include('../footer.php'); ?>