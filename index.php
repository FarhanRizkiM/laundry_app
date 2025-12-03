<?php
// Ambil slug dari URL, default = dashboard
$page = $_GET['page'] ?? 'dashboard';

// Tentukan file path
$filePath = "pages/{$page}.php";

// Tentukan title otomatis
if (file_exists($filePath)) {
    $prettyTitle = ucwords(str_replace('-', ' ', $page));
    $pageTitle = $prettyTitle . " - Laundry App";
} else {
    $filePath = "pages/404.php";
    $pageTitle = "Halaman Tidak Ditemukan - Laundry App";
}

// Panggil layout utama
include 'layouts/header.php';   // hanya html atas + page-wrapper
include 'layouts/sidebar.php';  // hanya sidebar

// Panggil halaman dinamis (yang mengandung body-wrapper + header internal)
include $filePath;

include 'layouts/footer.php';   // script + penutup
