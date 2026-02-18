<?php
session_start();
include("../config.php");   // database connection

$error = "";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows($query) > 0){
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - Cozy Cup</title>
    <style>
        body{
            margin:0;
            padding:0;
            font-family: Arial;
            background:#5c3a1e;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        .login-box{
            background:white;
            padding:25px;
            border-radius:10px;
            width:300px;
            text-align:center;
        }
        input{
            width:90%;
            padding:10px;
            margin:10px 0;
        }
        button{
            background:#c69c6d;
            color:white;
            border:none;
            padding:10px;
            width:100%;
            cursor:pointer;
        }
        .error{
            color:red;
            font-size:14px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Admin Login</h2>

    <form method="post">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit" name="login">Login</button>
    </form>

    <p class="error"><?php echo $error; ?></p>
</div>

</body>
</html>