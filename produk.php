<?php
header("Content-Type: application/json");

// koneksi database
$conn = new mysqli("localhost", "root", "", "db_penjualan");

// cek koneksi
if ($conn->connect_error) {
    die(json_encode(["error" => "Database gagal terhubung"]));
}

// ambil data produk
$sql = "SELECT * FROM produk";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// output JSON
echo json_encode($data);
