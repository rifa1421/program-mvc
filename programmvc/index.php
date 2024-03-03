<?php

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Biasanya, validasi dan autentikasi akan dilakukan di sini
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh autentikasi sederhana
    $validUsername = 'rifa';
    $validPassword = 'rifa mustopa';

    if ($username === $validUsername && $password === $validPassword) {
        echo "Login berhasil!";
        // Di sini biasanya akan ada redirect ke halaman setelah login
        exit;
    } else {
        echo "Login gagal. Coba lagi.";
    }
}

// Tampilkan form login
include 'login_form.php';
