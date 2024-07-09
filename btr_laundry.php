<?php
// Konfigurasi koneksi database
$servername = "localhost"; // Ganti sesuai dengan host Anda
$username = "root"; // Ganti sesuai dengan username MySQL Anda
$password = ""; // Ganti sesuai dengan password MySQL Anda
$dbname = "btr_laundry"; // Ganti sesuai dengan nama database yang sudah dibuat

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Query untuk membuat tabel orders
$sql = "CREATE TABLE IF NOT EXISTS orders (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    service VARCHAR(50) NOT NULL,
    items TEXT NOT NULL,
    total_amount DECIMAL(10,2) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    echo "Tabel orders berhasil dibuat.";
} else {
    echo "Error creating table: " . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
