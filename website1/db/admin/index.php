<?php

session_start();
include("../config.php");
if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = $_POST['password'];

    $q = mysqli_query($conn,"SELECT * FROM admin WHERE username='$u' AND password='$p'");
    if(mysqli_num_rows($q)>0){
        $_SESSION['admin']=$u;
        header("Location: dashboard.php");
    } else {
        echo "Invalid Login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<style>
body{font-family:arial;background:#5c3a1e;display:flex;justify-content:center;align-items:center;height:100vh;}
form{background:white;padding:20px;border-radius:10px;}
input{display:block;margin:10px 0;padding:8px;width:200px;}
button{background:#c69c6d;color:white;border:none;padding:10px;width:100%;}
</style>
</head>
<body>

<form method="post">
<h2>Admin Login</h2>
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>

</body>
</html>