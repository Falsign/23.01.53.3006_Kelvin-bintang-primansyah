<?php
header("Content-Type: application/json");
$conn = new mysqli("localhost", "root", "", "db_penjualan");
$result = $conn->query("SELECT * FROM pelanggan");
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
