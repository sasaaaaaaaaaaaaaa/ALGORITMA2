<?php

$nama = "alika";
$harga = 1000;
$nama_barang = "Kopi C++";
$NamaBarang1          = "computer alika";
$harga = 4000;
$stok = 40;
// membuat variabel baru
$stok = 40;

// mengisi ulang variabel dengan nilai baru
$stok = 34;

// 1)	Awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore.
// Contoh: Salah
// $!nama = "alika";
// $nama pendek = "sasa";
// Contoh: Benar
$nama = "alika";
$nama_pendek = "sasa";
// 2)	Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan style camelCase.
// Contoh:
$nama_barang = "computer alika";
$namaPembeli = "putri"; // menggunakan camelCase

// 3)	Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.
// Contoh:
$nama_barang = "buku novel";
$namaPembeli = "nayla";
$harga = 10000000;

// 4)	Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.
// Contoh: Tiga variabel ini akan dianggap berbeda.
$Belajar = "Informatika";
$BELAJAR = "SENI BUDAYA";
$belajar = "sejarah";

// =================== cara mencetak =======================
echo 
"<p>nama alika:$nama",
"<p>harga:$harga",
"<p>nama barang:$nama_barang",
"<p>namabarang:$NamaBarang1",
"<p>harg:$harga",
"<p>stok:$stok",
"<p>nama alika:$nama",
"<p>nama pendek sasa:$nama_pendek",
"<p>nama barang computer alika:$nama_barang",
"<p>namapembeli putri:$namaPembeli",
"<p>nama barang buku novel:$nama_barang",
"<p>namapembeli nayla:$namaPembeli",
"<p>harga:$harga",

$Belajar,"<p>".
$BELAJAR,"<p>".
$belajar;