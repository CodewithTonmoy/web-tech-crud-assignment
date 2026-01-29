<?php
include "db.php";

$key = $_GET['key'];

$sql = "SELECT * FROM products 
        WHERE display='Yes' 
        AND name LIKE '%$key%'";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $profit = $row['selling_price'] - $row['buying_price'];
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$profit."</td>";
    echo "<td>
            <a href='edit.php?id=".$row['id']."'>Edit</a> |
            <a href='delete.php?id=".$row['id']."'>Delete</a>
          </td>";
    echo "</tr>";
}
?>
