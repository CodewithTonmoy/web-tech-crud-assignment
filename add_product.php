<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

<h2>ADD PRODUCT</h2>

<form method="post" action="insert.php">
    <label>Name</label><br>
    <input type="text" name="name" required><br><br>

    <label>Buying Price</label><br>
    <input type="number" name="buying_price" required><br><br>

    <label>Selling Price</label><br>
    <input type="number" name="selling_price" required><br><br>

    <label>
        <input type="checkbox" name="display" value="Yes"> Display
    </label><br><br>

    <input type="submit" value="Save">
</form>

</body>
</html>
