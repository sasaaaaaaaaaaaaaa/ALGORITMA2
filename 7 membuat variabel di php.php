<?php

$nama = "sasa";
$harga = 1000;
$nama_barang = "Kopi C++";
$NamaBarang1  ="buku novel";
$harga = 4000;
$stok = 40;
// membuat variabel baru
$stok = 40;

// mengisi ulang variabel dengan nilai baru
$stok = 34;

// 1)	Awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore.
// Contoh: Salah
// $!nama = "ahmadi";
// $46rosi = "ahmadi pembalap";
// Contoh: Benar
$nama = "alika naswa sabila";
$namapendek = "sasa";
// 2)	Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan style camelCase.
// Contoh:
$nama_barang = "computer";
$namaPembeli = "nayla"; // menggunakan camelCase

// 3)	Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.
// Contoh:
$nama_barang = "bunga";
$namaPembeli = "nayla";
$harga = 10000000;

// 4)	Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.
// Contoh: Tiga variabel ini akan dianggap berbeda.
$Belajar = "Informatika";
$BELAJAR = "SENI BUDAYA";
$belajar = "sejarah";

// =================== cara mencetak =======================
echo 
"<p>nama:$nama",
"<p>harga:$harga",
"<p>nama barang buku novel:$nama_barang",
"<p>harga:$harga",
"<p>stok buku:$stok",
"<p>nama:$nama",
"<p>nama pendek sasa:$nama_pendek",
"<p>nama barang bunga:$nama_barang",
"<p>namapembeli nayla:$namapembeli", 
"<p>nama barang computer:$nama_barang",
"<p>namapembeli novla:$namaPembeli",
"<p>harga:$harga",
$Informatika,
$SENIBUDAYA,
$sejarah;