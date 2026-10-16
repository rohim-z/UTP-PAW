<?php
// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    // Kerjakan ELSE ini
    echo "<p>Nama: " . $_SESSION["nama"] . "</p>";
    echo "<p>Jenis Ramuan: " . $_SESSION["menu"] . "</p>";
    echo "<p>Jumlah: " . $_SESSION["jumlah"] . "</p>";
    echo "<p>Kategori: " . $_SESSION["kategori"] . "</p>";
    echo "<p>Harga: Rp. " . $_SESSION["harga"] . "</p>";
    echo "<p>Subtotal: Rp. " . $_SESSION["subtotal"] . "</p>";
    echo "<p>Diskon: Rp. " . $_SESSION["diskon"] . "</p>";
    echo "<p>Total: Rp. " . $_SESSION["total"] . "</p>";

    echo "<h3>Status Botol:</h3>";
    for ($i = 1; $i <= $_SESSION["jumlah"]; $i++) {
        echo "<p>Botol ke-$i: Masih Tersegel</p>";
    }
}
