<?php
require_once 'db.con.inc.php';
include('../header.php');
?>

<link rel="stylesheet" href="../style.css">
<?php

if (isset($_GET['id'])) {
    $id = $_GET['id']; 

    // Secure SQL query using a prepared statement
    $query = "SELECT * FROM `user` WHERE `id` = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch single row

    if ($user) { // Check if user exists
?>
        <form action="edit_user.inc.php" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($user['name']) ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" required>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" value="<?= htmlspecialchars($user['age']) ?>" required>
            </div>
            <br>
            <div class="first-container">
            <input type="submit" class="btn btn-success" name="update_user" class="btn btn-success" value="Update">

            <a href="/index.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
<?php
    } else {
        echo "<p>User not found.</p>";
    }
}
?>


<?php

?>

<?php include('../footer.php'); ?>