<?php
$host = "localhost";
$db   = "blog_pribadi";
$user = "root";
$pass = "rusdiana87";

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8",
        $user,
        $pass
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
