<?php echo "hello good morning"; ?>
<?= 'print this string' ?> 
<!-- This is the shorthand for <?php echo ''; ?> -->


<?php echo "hello good morning";
$is_logged_in=true;
?>


<?php if($is_logged_in): ?>
    <p>welcome back! user</p>
<?php else: ?>
     <p>please log in.</p>
<?php endif; ?>

<?php echo "Some text"; ?>
No newline
<?= "But newline now" ?>