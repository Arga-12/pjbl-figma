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

// Cek apakah ada ID yang diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data pesan berdasarkan ID
    $sql = "SELECT * FROM user_feedbacks WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Periksa apakah data ditemukan
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    } else {
        echo "Pesan tidak ditemukan.";
        exit();
    }
}

// Proses update data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Query untuk update data
    $update_sql = "UPDATE user_feedbacks SET name = ?, email = ?, message = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("sssi", $name, $email, $message, $id);

    if ($update_stmt->execute()) {
        header("Location: /pjbl-figma/feedback/view_feedback.php");
        exit();
    } else {
        echo "Gagal mengedit pesan: " . $update_stmt->error;
    }

    $update_stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pesan</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h2>Edit Pesan</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <!-- Input Nama -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" id="name" name="name" 
                               class="form-control" 
                               value="<?php echo htmlspecialchars($data['name']); ?>" 
                               required>
                    </div>

                    <!-- Input Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" 
                               class="form-control" 
                               value="<?php echo htmlspecialchars($data['email']); ?>" 
                               required>
                    </div>

                    <!-- Input Pesan -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea id="message" name="message" 
                                  class="form-control" rows="5" 
                                  required><?php echo htmlspecialchars($data['message']); ?></textarea>
                    </div>

                    <!-- Tombol Simpan dan Batal -->
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                        <a href="/pjbl-figma/feedback/view_feedback.php" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>