<?php
// Mendefinisikan ROOTHPATH sebagai path ke direktori root proyek
define('ROOTHPATH', $_SERVER['DOCUMENT_ROOT'] . '/rpl4_indomaret');

include ROOTHPATH . '/includes/header.php';
?>

<center style="margin-top: 50px;">
    <h1>Tambah Data Kasir</h1>
    <form action"" method="post">
        <input type="text" name="nama_kasir" 
        placeholder="masukkan nama kasir..."
        required>
        <input type="text" name="no_telp"
        placeholder="masukkan nomer telepon kasir..."
        required>
        <button type="submit">Tambah kasir</button>
</form>
</center>