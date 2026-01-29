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
    <title>Edit Product</title>
</head>
<body>

<h2>EDIT PRODUCT</h2>

<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Name:<br>
    <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

    Buying Price:<br>
    <input type="number" name="buying_price" value="<?php echo $row['buying_price']; ?>"><br><br>

    Selling Price:<br>
    <input type="number" name="selling_price" value="<?php echo $row['selling_price']; ?>"><br><br>

    <input type="checkbox" name="display" value="Yes"
    <?php if ($row['display'] == "Yes") echo "checked"; ?>>
    Display<br><br>

    <input type="submit" value="Update">
</form>

</body>
</html>
