<?php
require_once 'header.php';
require_once 'include/db.con.inc.php';
?>
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

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

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
    <!-- DataTables CSS -->
   <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> -->
 
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
 
    <!-- DataTables Buttons (for export options) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 

<!-- DataTables Initialization -->
<script>
    $(document).ready(function () {
        $('.table').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
</script>



<?php require_once 'footer.php'; ?>