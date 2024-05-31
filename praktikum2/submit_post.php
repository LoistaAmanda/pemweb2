<?php

$username = $_POST['username'];
$password = $_POST['password'];

?>

<div>
    <h1>You are logged in !</h1>
    <h1>Username : <?php echo $username ?></h1>
    <h1>Password : <?= $password ?></h1>
</div>