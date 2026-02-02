<?php
require('vendor/autoload.php'); // Razorpay PHP SDK
use Razorpay\Api\Api;

$api_key = '';
$api_secret = '';

$api = new Api($api_key, $api_secret);   

// Collect POST data
$data = json_decode(file_get_contents("php://input"), true);

$full_name = $data['full-name'];
$email = $data['email'];
$donation_amount = !empty($data['custom-amount']) ? $data['custom-amount'] : $data['donation-amount'];
$message = $data['message'] ?? '';

// Convert amount to paise
$amount_paise = $donation_amount * 100;

// Create Razorpay order
$order  = $api->order->create([
    'receipt' => 'rcpt_' . time(),
    'amount' => $amount_paise,
    'currency' => 'INR',
    'payment_capture' => 1 // auto-capture
]);

// Connect to DB
$conn = new mysqli("localhost","root","","paarvedanfoundation");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

// Insert preliminary record
$stmt = $conn->prepare("INSERT INTO donations (full_name, email, amount, message, payment_id, status) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssdsss", $full_name, $email, $donation_amount, $message, $order['id'], $status='created');
$stmt->execute();
$stmt->close();
$conn->close();

// Return order info as JSON
echo "TEST_OUTPUT";
exit;
?>
