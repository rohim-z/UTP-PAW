<?php
// Level 4: Kerjakan mulai darisini

if (isset($_COOKIE["nama_petualang"]) && $_COOKIE["nama_petualang"] !== "") {
    $nama_petualang = $_COOKIE["nama_petualang"];
    echo "<p><strong>Salam petualang, $nama_petualang! Ramuan apa yang engkau cari hari ini?</strong></p>";
} else {
    echo "<p>Selamat datang di Warung Ramuan Alkimia Embah Goib!</p>";
}
