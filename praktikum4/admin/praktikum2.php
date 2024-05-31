<?php 
require_once 'navbar.html'; 
require_once 'sidebar.html';
?>


<h1> Praktikum 2</h1>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form Registrasi Pengguna</h1>
    <form action="submit_get.php" method="GET">
    <div>
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap">
    </div><br>
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div><br>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div><br>
    <div>
        <button type="submit">Register</button>
    </div>
</form>
</body>
</html>

<?php require_once 'footer.html'; ?>