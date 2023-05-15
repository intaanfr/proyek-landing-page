<?php
// data server mysql
$db_host = '127.0.0.1'; // --> sever mysql
$db_user = 'root';      // --> username
$db_pass = '';          // --> password
$db_name = 'db_healthbeauty';     // --> nama database

// Fungsi untuk koneksi ke mysqli
$koneksi = new mysqli($db_host, $db_user, $db_pass, $db_name);

// cok koneksi
if ($koneksi->connect_error) {
    // jika salah. Bisa juga menggunakan exit();
    die('Koneksi Gagal loh ^_^ : ' . $koneksi->connect_error) . '';
}
