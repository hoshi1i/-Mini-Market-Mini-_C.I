<?php
include 'config.php';

function submitData($email, $username, $password) {
    global $conn;

    // Validasi input agar tidak kosong
    if (empty($email) || empty($username) || empty($password)) {
        return "Semua kolom harus diisi!";
    }

    // Cek apakah email sudah terdaftar
    $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0)  {
        return "Email sudah digunakan!";
    }

    // Enkripsi password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan ke database
    $stmt = $conn->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $username, $password);

    if ($stmt->execute()) {
        return "Registrasi berhasil! Silakan login.";
    } else {
        return "Error: " . $stmt->error;
    }
}
?>
