<?php
require "db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["prices"]) || !is_array($data["prices"])) {
    echo json_encode(["error" => "Invalid input"]);
    exit;
}

$total = 0;

foreach ($data["prices"] as $price) {
    $total += floatval($price);
}

// Save total to database
$stmt = $conn->prepare("INSERT INTO totals (total) VALUES (?)");
$stmt->bind_param("d", $total);
$stmt->execute();

echo json_encode(["total" => $total]);
