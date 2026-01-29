<?php
include "db.php";

$name = $_POST['name'];
$buying_price = $_POST['buying_price'];
$selling_price = $_POST['selling_price'];
$display = isset($_POST['display']) ? "Yes" : "No";

$sql = "INSERT INTO products (name, buying_price, selling_price, display)
        VALUES ('$name', '$buying_price', '$selling_price', '$display')";

mysqli_query($conn, $sql);

header("Location: display.php");
?>
