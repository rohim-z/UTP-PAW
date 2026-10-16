<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini

$daftar_harga = array(
    "Healing Potion Merah" => 15000,
    "Mana Elixir Biru" => 18000,
    "Stamina Draught Hijau" => 22000,
    "Invisibility Potion Ungu" => 35000,
    "Dragon Breath Tonic Emas" => 50000
);

// Hitung harga
$harga = $daftar_harga[$menu];
$subtotal = $harga * $jumlah;

// Hitung Diskon
$diskon = 0;
if ($kategori == "Adventurer Guild" && $jumlah >= 3) {
    $diskon = $subtotal * (20/100); 
} else {
    $diskon = 0;
}


// total harga
$total = $subtotal - $diskon;

// cek valid
$valid = true;
$pesan = "";

if ($total <= 0) {
    $valid = false;
    $pesan = "<h2>Pesanan tidak dapat diproses!</h2><p>Jumlah pembelian minimal 1. Kamu memasukkan angka 0 atau negatif.</p>";
}