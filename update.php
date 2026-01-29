<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$buying_price = $_POST['buying_price'];
$selling_price = $_POST['selling_price'];
$display = isset($_POST['display']) ? "Yes" : "No";

$sql = "UPDATE products SET
        name = '$name',
        buying_price = '$buying_price',
        selling_price = '$selling_price',
        display = '$display'
        WHERE id = $id";

mysqli_query($conn, $sql);

header("Location: display.php");
exit();
?>
