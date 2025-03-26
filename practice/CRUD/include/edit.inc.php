<?php

require_once 'db.con.inc.php';
require_once '../../CRUD/header.php';

?>

<?php

// if(isset($_GET['id'])){
//     $id=$_GET['id'];
// }

?>
<form>
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
</form>











<?php require_once 'footer.php'; ?>