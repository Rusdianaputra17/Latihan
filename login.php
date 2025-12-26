<?php
require __DIR__ . '/config/database.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare(
        "SELECT * FROM users WHERE username = :username"
    );
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($password === $user['password']) {
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Password salah";
        }
    } else {
        echo "Username tidak ditemukan";
    }
}
