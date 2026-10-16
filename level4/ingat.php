<?php
// Kerjakan Level 4 di sini: simpan nama pengguna ke Cookie
$durasi = (1 * 24 * 60 * 60) + (5 * 60 * 60) + (45 * 60);
setcookie("nama_petualang", $nama, time() + $durasi);
