<?php
session_start();
include("../config.php");

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

// total users example
$total = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background: url("images/pic1.jpg")no-repeat center center;
            background-size: cover;

        }

        .header{
            padding:15px 30px;
            background:#5C3A1E;
            font-size:22px;
            font-weight:bold;
            color:white;
        }

        .container{
            display:flex;
            padding:20px;
        }

        
        .cards{
            width:250px;
            margin-right:20px;
        }

        .card{
            background:#5c3a1e;
            color:white;
            padding:25px;
            margin-bottom:20px;
            border-radius:8px;
            text-align:center;
            font-size:18px;
        }
        .card:hover{
            background:#e97f27;
        }

        
        .table-box{
            flex:1;
            background:white;
            padding:15px;
            border-radius:8px;
        }
    h2{
    color:#5c3a1e;   
    }
        table{
            width:100%;
            border-collapse:collapse;
        }

        th,td{
            border:1px solid #ddd;
            padding:8px;
            text-align:center;
        }

        th{
            background:#5c3a1e;
            color:white;
        }

        a{
            color:red;
            text-decoration:none;
        }
    </style>
</head>
<body>

<div class="header">
    Welcome <?php echo $_SESSION['admin']; ?> 👋
</div>

<div class="container">

    
    <div class="cards">
        <div class="card">
            Total Users <br><br>
            <?php echo $total; ?>
        </div>

        <div class="card">
            Total Orders <br><br>
            5
        </div>

        <div class="card">
            Earnings <br><br>
            ₹0
        </div>
    </div>

    
    <div class="table-box">
        <h2>Registered Users</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            <?php
            $res = mysqli_query($conn,"SELECT * FROM users");
            while($row=mysqli_fetch_assoc($res)){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>

</div>

</body>
</html>