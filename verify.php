<?php
header("Content-Type: application/json");
error_reporting(0); // hide PHP warnings

$data = json_decode(file_get_contents("php://input"), true);

if(!$data || !isset($data["razorpay_order_id"], $data["razorpay_payment_id"], $data["razorpay_signature"])){
    echo json_encode(["success" => false, "message" => "Invalid input"]);
    exit;
}

$order_id = $data["razorpay_order_id"];
$payment_id = $data["razorpay_payment_id"];
$signature = $data["razorpay_signature"];

$key_secret = "";

// Signature verification
$generated_signature = hash_hmac('sha256', $order_id . "|" . $payment_id, $key_secret);

if($generated_signature === $signature){

    $conn = new mysqli("localhost", "root", "", "paarvedanfoundation");
    if($conn->connect_error){
        echo json_encode(["success" => false, "message" => "Database connection failed"]);
        exit;
    }

    $stmt = $conn->prepare("UPDATE donations SET payment_id=?, signature=?, status='paid' WHERE order_id=?");
    $stmt->bind_param("sss", $payment_id, $signature, $order_id);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo json_encode(["success" => true]);

} else {
    echo json_encode(["success" => false, "message" => "Signature mismatch"]);
}
