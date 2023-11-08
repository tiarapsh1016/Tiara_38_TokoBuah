<?php 
session_start();
    if($_POST){
        include "koneksi.php";

        $qry_get_menu=mysqli_query($conn, "SELECT * from menu where id_menu = '".$_GET['id_menu']."'");
        $dt_menu=mysqli_fetch_array($qry_get_menu);
        $_SESSION['keranjang'][]=array(
            'id_menu'=>$dt_menu['id_menu'],
            'nama_menu'=>$dt_menu['nama_menu'],
            'jumlah_order'=>$_POST['jumlah_order'],
            'harga_pcs'=>$dt_menu['harga_pcs'],
        );
    }
    header('location: keranjang.php');
?>
