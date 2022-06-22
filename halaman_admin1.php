<?php include('koneksi4.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>produk</title>
    <style type="text/css">
        *{
            font-family: "Trebuchet MS";

        }
        h1 {
            text-transform: uppercase;
            color: #c0c0c0;
        }
        table {
            border: 1px solid #ddeeee;
            border-collapse: collapse;
            border-spacing: 0;
            width :70%;
            
            margin: 10px auto 20px auto;
        }
        table thead th {
            background-color: #ddefef;
            border: 1px solid #ddeeee;
            color:#336b6b;
            padding: 10px;
            text-align: left;
            text-shadow: 1px 1px 1px #fff;
        }
        table tbody td{
            border: 1px solid #ddeeee;
            color: #333;
            padding: 15px;
            

            
        }
        a {
          background-color: #c0c0c0;
          color: #fff;
          padding: 10px;
          font-size:12px;
          text-decoration:none;

        }
        
         
    </style>
</head>
<body>

<center><h1> DATA PRODUK</h1></center>

<center><a href="tambah_produk.php">+ &nbsp; tambah_produk</a></center>
<br>
<center><a href="logout.php"> logout</a></center>

<table>
<thead>
<tr>
    <th>No</th>
    <th>produk</th>
    <th>Deskripsi</th>
    <th>Harga beli</th>
    <th>harga jual</th>
   
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
    $query ="SELECT * FROM produk ORDER BY id ASC";
    $result = mysqli_query($koneksi, $query);
    if(!$result) {
        die("Query Error :".mysqli_errno($koneksi)."_".mysqli_error($koneksi));
    }
    $no = 1;
    while($row = mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nama_produk']; ?></td>
            <td><?php echo substr($row['deskripsi'], 0, 25); ?>...</td>
            
            <td>Rp <?php echo number_format($row['harga_beli'], 0,',','.'); ?></td>
            
            <td>Rp <?php echo number_format($row['harga_jual'], 0,',','.'); ?></td>
           
            <td>
                <a href="formedit4.php?id=<?php echo $row['id'];?>"> Edit</a>
                <a href="hapus.php?id=<?php echo $row['id'];?>" onclick="return confirm('anda yakin ingin hapus data ini?')">hapus</a>
            </td>

        </tr>
        <?php
    $no++;
    }
?>
</tbody>


</table>
</body>
</html>