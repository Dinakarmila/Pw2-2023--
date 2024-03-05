<?php
$nama = $_GET['nama'];
$product = $_GET['product'];
$jumlah = $_GET['jumlah'];

// Daftar harga produk
$harga_laptop = 4.00000;
$harga_headphone = 1000000;
$harga_setrika = 1.00000;

// Menghitung total harga berdasarkan produk yang dipilih
if ($product === 'laptop') {
    $total_harga = $jumlah * $harga_laptop;
} elseif ($product === 'headphone') {
    $total_harga = $jumlah * $harga_headphone;
} elseif ($product === 'setrika') {
    $total_harga = $jumlah * $harga_setrika;
} else {
    $total_harga = 0; // Default jika produk tidak valid
}

// Menampilkan hasil
echo '<h2>Hasil Belanja Online</h2>';
echo 'Nama Customer: ' . $nama . '<br>';
echo 'Produk Pilihan: ' . $product . '<br>';
echo 'Jumlah Barang: ' . $jumlah . '<br>';
echo 'Total Harga: Rp ' . number_format($total_harga, 0, ',','.');
?>