<?php
include('koneksi4.php');
$id=$_POST['id'];
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];



    $query ="UPDATE produk SET nama_produk='$nama_produk',  deskripsi='$deskripsi', harga_beli='$harga_beli', harga_jual='$harga_jual'"; 
    $query .="WHERE id ='$id'";
        $result =mysqli_query($koneksi,$query);
        if(!$result) {
            die("Query Error :".mysqli_errno($koneksi)."_".mysqli_error($koneksi));
        
          
        } else{
            echo"<script>alert('data berhasil diubah!');window.location='halaman_admin1.php';</script>";
        
        }
        
        
    
     ?>