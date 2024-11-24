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

// Ambil semua data dari tabel feedbacks
$sql = "SELECT * FROM user_feedbacks ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Feedback</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Data Feedback</h1>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td><?= htmlspecialchars($row['name']); ?></td>
                            <td><?= htmlspecialchars($row['email']); ?></td>
                            <td><?= htmlspecialchars($row['message']); ?></td>
                            <td><?= $row['created_at']; ?></td>
                            <td>
                                <a href="edit_feedback.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete_feedback.php?id=<?= $row['id']; ?>" 
                                class="btn btn-danger btn-sm" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Belum ada data feedback.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <a href="/pjbl-figma/index.php?page=home" class="btn mt-5">Kembali</a>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
