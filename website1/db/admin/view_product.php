<?php
include("../config.php");
$result = mysqli_query($conn,"SELECT * FROM products");
?>

<h2>All Products</h2>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Delete</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php } ?>
</table>