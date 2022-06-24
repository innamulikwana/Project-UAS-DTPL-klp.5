<?php include('koneksi4.php'); 
if(isset($_GET['id'])) {
    $id =$_GET['id'];
    $query="SELECT * FROM produk where id ='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result) {
        die("Query Error :".mysqli_errno($koneksi)."_".mysqli_error($koneksi));

    }
    $data = mysqli_fetch_assoc($result);
    if(!count($data)) {
        echo "<script>alert('data tidak ditemukan pada tabel.');window.location ='halaman_admin1.php';</script>";
    }

} else{
    echo"<script>alert('masukkan ID yang ingin di edit');window.location='halaman_admin1.php';</script)";
}
    ?>
<!DOCTYPE html>

<html>
<head>
    <title></title>
    <style type="text/css">
     *{
            font-family: "Trebuchet MS";

        }
        h1 {
            text-transform: uppercase;
            color: salmon;
        }
        .base{
            width:400px;
            padding: 20px;
            margin-left:auto;
            margin-right:auto;
            background-color:#ededed;
        }
        label {
            margin-top:10px;
            float:left;
            text-align: left;
            width: 100%;

        
        }
        input{
            padding:6px;
            width:100%;
            box-sizzing:border-box;
            background-color: #f8f8f8;
            border: 2px solid #ccc;
            outline-color:salmon;       
         }
         button{
             background-color:salmon;
             color:#fff;
             padding: 10px;
             font-size:12px;
             border:0;
             margin-top:20px;

         }
    </style>


</head>
<body>
    <center><h1>edit produk <?php echo $data['nama_produk'];?></h1></center>
    <form method="POST" action="update1.php" enctype="multipart/form-data">
    <section class="base">
    <div>
        <label> nama produk</label>
        <input type="text" name="nama_produk" autofocus="" required="" value="<?php  echo $data['nama_produk'];?>"/>
        <input type="hidden" name="id" value="<?php  echo $data['id'];?>"/>
    </div>

    <div>
    <label> Deskripsi</label>
    <input type="text" name="deskripsi"value="<?php  echo $data['deskripsi'];?>" />
    </div>
    <div>
    <label> Harga beli</label>
    <input type="text" name="harga_beli" required="" value="<?php  echo $data['harga_beli'];?>" />
    </div>
    <div>
    <label> Harga jual</label>
    <input type="text" name="harga_jual" required=""value="<?php  echo $data['harga_jual'];?>" />
    </div>
    <div>
    <br>
    <button type="submit">simpan perubahan</button>
    </div>
    </section>
</body>
</html>