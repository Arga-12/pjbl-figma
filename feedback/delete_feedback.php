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

// Cek apakah ID diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data
    $sql = "DELETE FROM user_feedbacks WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: view_feedback.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID tidak ditemukan.";
}

$conn->close();
?>
