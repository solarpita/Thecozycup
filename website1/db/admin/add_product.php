<?php
include("../config.php");

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $price = $_POST['price'];

    mysqli_query($conn,"INSERT INTO products(name,price) VALUES('$name','$price')");
    echo "Product Added";
}
?>

<h2>Add Product</h2>

<form method="post">
Name: <input type="text" name="name" required><br><br>
Price: <input type="text" name="price" required><br><br>
<button name="save">Save</button>
</form>