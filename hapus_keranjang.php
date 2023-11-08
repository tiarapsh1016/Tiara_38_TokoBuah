<?php
    session_start();
    include 'koneksi.php';

    if(isset($GET['id_menu'])){
        $id_menu = $GET['id_menu'];
    }else
    {
        $id_menu = "";
    }
    if($id_menu == 'delete'){
       $id_menu = $_GET['id_menu'];
       $sql1 = "DELETE FROM menu WHERE id_menu= '$id'"; 
       $q1= mysqli_query($koneksi, $sql1);
       if($q1){
        $sukses = "Berhasil Hapus data";
       }else{
        $error = "Gagal melakukan Hapus Data";
       }

    }
    // $id_menu = $_GET['id_menu'];

    // unset($_SESSION['keranjang'][$id_menu]);

    // header('location: keranjang.php');
    echo "<script>alert('Produk telah dihapus');</script>";
echo "<script>location= 'keranjang.php'</script>";
?>
