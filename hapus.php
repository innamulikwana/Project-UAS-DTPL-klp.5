<?php 
include("koneksi4.php");
if( isset($_GET['id'])){
    $id=$_GET['id'];
    $sql= "DELETE FROM produk WHERE id=$id";
    $query=mysqli_query($koneksi,$sql);
    if($query){
header('Location: halaman_admin1.php');
    } else {
    
die("gagal menghapus.......");
    }
} else {
    die("akses dilarang.......");

}
?>