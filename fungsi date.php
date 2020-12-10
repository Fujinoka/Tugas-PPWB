<?php

function tampil_identitas($nama, $kelas, $alamat)
{
    echo 'Nama Saya ' . $nama . '<br>';
    echo 'Kelas Saya ' . $kelas . '<br>';
    echo 'Alamat Saya ' . $alamat . '<br>';
}

function hitung_umur($tahun_lahir, $tahun_sekarang)
{
    return $tahun_sekarang - $tahun_lahir;
}

tampil_identitas('Aldo', 'XI RPL 3', 'Bandung');

$umur_saya = hitung_umur(2004, 2020);
echo "Umur Saya $umur_saya tahun";
?>
