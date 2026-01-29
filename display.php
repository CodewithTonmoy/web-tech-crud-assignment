<?php
include "db.php";
$sql = "SELECT * FROM products WHERE display='Yes'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>

<script>
function searchProduct() {
    var keyword = document.getElementById("search").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("table-data").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "search.php?key=" + keyword, true);
    xhttp.send();
}
</script>

<body>

<h2>DISPLAY PRODUCTS</h2>

<input type="text" id="search" placeholder="Search by name" onkeyup="searchProduct()">
<br><br>


<table border="1" cellpadding="8">
    <tbody id="table-data">

    <tr>
        <th>Name</th>
        <th>Profit</th>
        <th>Action</th>
    </tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    $profit = $row['selling_price'] - $row['buying_price'];
?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $profit; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</tbody>

</table>

<br>
<a href="add_product.php">Add New Product</a>

</body>
</html>
