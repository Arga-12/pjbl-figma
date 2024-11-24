<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "feedback_db";

$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Query untuk menyimpan data
$sql = "INSERT INTO user_feedbacks (name, email, message) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    header("Location: /pjbl-figma/index.php?page=kontak");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
