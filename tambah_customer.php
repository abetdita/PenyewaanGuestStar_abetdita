<?php
session_start();
include 'koneksi.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';}
    
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="profile.php">Profile</a>|
    <a href="data_produk.php">Data Produk</a>|
    <a href="data_customer.php">Data Customer</a>|
    <a href="logout.php">Logout</a>|

    <h1>Tambah Data Produk</h1>
    <form action="" method="POST">
        <input type="text" name="no" class="input-control" placeholder="No Pesanan" required>
        <input type="text" name="qty" class="input-control" placeholder="Qty" required>
        <input type="text" name="nama" class="input-control" placeholder="Nama Customer" required>
        <input type="text" name="telp" class="input-control" placeholder="Telp" required>
        <input type="text" name="produk" class="input-control" placeholder="Produk" required>
        <input type="text" name="harga" class="input-control" placeholder="Harga" required>
        <input type="text" name="total" class="input-control" placeholder="Total" required>
        <input type="submit" name="submit" class="btn" >
   </form>

<?php 
    if(isset($_POST['submit'])){

        $no = $_POST['no'];
        $qty = $_POST['qty'];
        $nama = $_POST['nama'];
        $telp = $_POST['telp'];
        $produk = $_POST['produk'];
        $harga = $_POST['harga'];
        $total = $_POST['total'];

        $insert = mysqli_query($conn, "INSERT INTO tb_customer VALUES(
                      '".$no."',
                      '".$qty."',
                      '".$nama."',
                      '".$telp."',
                      '".$produk."',
                      '".$harga."',
                      '".$total."'
                      )");
        if($insert)
        {echo '<script>alert("Tambah data customer berhasil")</script>';
            echo  '<script>window.location="data_customer.php"</script>';}
        }else{
            echo 'gagal'.mysqli_error($conn);
        }
?>
</body>
</html>