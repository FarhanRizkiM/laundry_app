<?php
// Daftar route berdasarkan slug => [file, title]
$routes = [

    // DASHBOARD
    'dashboard' => [
        'file'  => 'pages/dashboard.php',
        'title' => 'Dashboard'
    ],

    // OPERASIONAL
    'transaksi' => [
        'file'  => 'pages/operasional/transaksi.php',
        'title' => 'Transaksi',
        'css'   => ['assets/css/transaksi.css'],
        'js'    => ['assets/js/transaksi.js'],
    ],
    'produksi' => [
        'file'  => 'pages/operasional/produksi.php',
        'title' => 'Produksi',
        'css'   => ['assets/css/produksi.css'],
        'js'    => ['assets/js/produksi.js'],
    ],
    'kurir' => [
        'file'  => 'pages/operasional/kurir.php',
        'title' => 'Kurir',
        'js'    => ['assets/js/kurir.js'],
    ],

    // MANAJEMEN TOKO
    'data-pelanggan' => [
        'file'  => 'pages/manajemen-toko/data-pelanggan.php',
        'title' => 'Data Pelanggan'
    ],
    'data-karyawan' => [
        'file'  => 'pages/manajemen-toko/data-karyawan.php',
        'title' => 'Data Produksi',
        'js'    => ['assets/js/data-karyawan.js'],
    ],
    'katalog-layanan' => [
        'file'  => 'pages/manajemen-toko/katalog-layanan.php',
        'title' => 'Katalog Layanan',
        'js'    => ['assets/js/katalog-layanan.js'],
    ],

    // PEMBUKUAN
    'laporan-keuangan' => [
        'file'  => 'pages/pembukuan/laporan-keuangan.php',
        'title' => 'Laporan Keuangan'
    ],
    'riwayat-transaksi' => [
        'file'  => 'pages/pembukuan/riwayat-transaksi.php',
        'title' => 'Riwayat Transaksi'
    ],
];

// Ambil slug dari URL, default = dashboard
$slug = $_GET['page'] ?? 'dashboard';

// Cek slug, jika tidak ada → arahkan ke halaman 404
if (isset($routes[$slug]) && file_exists($routes[$slug]['file'])) {
    $currentRoute = $routes[$slug];
    $filePath  = $currentRoute['file'];
    $pageTitle = $currentRoute['title'] . ' - Laundry App';
} else {
    $currentRoute = [
        'file' => 'pages/404.php',
        'title' => 'Halaman Tidak Ditemukan',
        'css' => [],
        'js' => [],
    ];
    $filePath  = $currentRoute['file'];
    $pageTitle = $currentRoute['title'] . ' - Laundry App';
}

// Layout utama
include 'layouts/header.php';
include 'layouts/sidebar.php';

// Konten halaman
include $filePath;

include 'layouts/footer.php';
