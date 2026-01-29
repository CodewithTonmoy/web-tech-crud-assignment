<?php
include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
</head>
<body>

<h2>DELETE PRODUCT</h2>

<p><strong>Name:</strong> <?php echo $row['name']; ?></p>
<p><strong>Buying Price:</strong> <?php echo $row['buying_price']; ?></p>
<p><strong>Selling Price:</strong> <?php echo $row['selling_price']; ?></p>
<p><strong>Display:</strong> <?php echo $row['display']; ?></p>

<form method="post" action="delete_confirm.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="submit" value="Delete">
</form>

<br>
<a href="display.php">Cancel</a>

</body>
</html>
