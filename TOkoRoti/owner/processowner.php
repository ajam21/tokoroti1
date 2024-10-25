<?php
// login.php
session_start();

// Ganti sesuai username dan password owner
$owner_username = 'owner';
$owner_password = 'password123';

if ($_POST['username'] == $owner_username && $_POST['password'] == $owner_password) {
    $_SESSION['is_owner'] = true;
    header("Location: report.php");
} else {
    echo "Login gagal. Silakan coba lagi.";
}
?>
