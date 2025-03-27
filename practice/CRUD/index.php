<?php
require_once 'header.php';
require_once 'include/db.con.inc.php';
?>

<div class="first-container">
    <h3>ALL Logs</h3>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENT</button>
</div>
<br>


<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>update</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>

        <?php
        
        $query = "SELECT * FROM user";
        $stmt = $pdo->prepare($query);
        $stmt->execute(); // Ensure execution
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            echo '<tr>
                    <td>' . $user['id'] . '</td>
                    <td>' . $user['name'] . '</td>
                    <td>' . $user['email'] . '</td>
                    <td>' . $user['age'] . '</td>
                    <td><a href="include/edit.inc.php?id=' . $user['id'] . '" class="btn btn-success">Update</a></td>
                    <td><a href="include/delete.inc.php?id=' . $user['id'] . '" class="btn btn-danger">Delete</a></td>
                  </tr>';
        }


        ?>
    </tbody>
</table>

<?php
if (isset($_GET['message'])) {
    echo "<h6>" . $_GET['message'] . "</h6>";
}
?>


<form action="include/add.inc.php" method="POST">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age">age</label>
                        <input type="text" name="age" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-failure" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="add_student" value="ADD">

                </div>
            </div>
        </div>
    </div>
</form>




<?php require_once 'footer.php'; ?>