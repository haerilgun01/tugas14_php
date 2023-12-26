<?php 
    require_once '../models/dbkoneksi.php';
    require_once 'class_jenis.php';

    // tangkap request element form
    $nama = $_POST['nama'];
    $tombol = $_POST['submit'];

    // Menyimpan data diatas ke sebuah array
    $data = [
        $nama,      // ? 1
    ];

    // proses
    $obj = new Jenis_Produk($dbh);
    // $obj->simpan($data);

     //proses edit & hapus
     switch ($tombol) {
        case 'simpan';
            $obj->simpan($data);
            break;
        case 'ubah';
            $data[] = $_POST['idx']; //tangkap hidden field u/ ? ke-8
            $obj->ubah($data);
            break;
        case 'hapus';
        $id[] = $_POST['idx']; //tangkap ke-1 where id=?
        $obj->hapus($id);
        break;  
        default://tombol batal
        header('Location:http://localhost/Latihan_PHP/crud_1/IndexJenis.php?hal=DataBarang');
            break;
    }

    // Landing Page
    header('Location://localhost/Latihan_PHP/crud_1/IndexJenis.php');

?>