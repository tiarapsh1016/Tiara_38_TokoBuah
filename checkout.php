<?php 
    session_start();
    include "koneksi.php";
    $cart=@$_SESSION['keranjang'];

    if(count($keranjang)>0){
        mysqli_query($conn,"insert into pemesanan2 (id_pemesanan,tanggal_pemesanan,total_belanja) value('".$_SESSION['id_pemesanan']."','".date('Y-m-d')."','".$total_belanja."')");
        
         $id=mysqli_insert_id($conn);

        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into detail_pemesanan (id_member,id_menu,qty) value('".$id."','".$val_produk['id_b']."','".$val_produk['qty']."')");
        }

        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil membeli buku");location.href="histori_peminjaman.php"</script>';
    }
?>
