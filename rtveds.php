<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "sampledb");

// Check connection
if ($conn->connect_error) {
    die("Connection failed");
}
// Retrieve data
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

echo "<h2>Product Details</h2>";

// Display data
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Item Name</th><th>Price</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['item_name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "</tr>";
}

echo "</table>";

$conn->close();
?>
