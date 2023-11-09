<?php 
    include "header.php";
    include "koneksi.php";
    session_start();

?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <br><br><br><br><br>
<h2>Daftar Pesanan di Keranjang</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Menu</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <tbody>
        <?php
        if (isset($_SESSION['keranjang']) && is_array($_SESSION['keranjang'])) {
            foreach ($_SESSION['keranjang'] as $key_produk => $val_produk):
                ?>
                <tr>
                    <td>
                        <?= ($key_produk + 1) ?>
                    </td>
                    <td>
                        <?= $val_produk['nama_menu'] ?>
                    </td>
                    <td>
                        <?= $val_produk['jumlah_order'] ?>
                    </td>
                    <td>
                        $
                        <?= $val_produk['harga_pcs'] * $val_produk['jumlah_order'] ?>
                    </td>
                    <td><a href="hapus_keranjang.php?id=<?= $key_produk ?>" class="btn btn-danger"><strong>X</strong></a></td>
                </tr>
            <?php endforeach ?>
            <?php
        } else {
            ?>
            <tr>
                <td colspan="5">Your cart is empty.</td>
            </tr>
        <?php
        }
       ?>
       </tbody>


               



        </div>
    </div>
</table>

<a href="menu.php"class="btn btn-info">Kembali Belanja</a>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
            

<!-- < 
      if(isset($_POST['konfirm'])) {
          $tanggal_pemesanan=date("Y-m-d");

          // Menyimpan data ke tabel pemesanan
          $insert = mysqli_query($koneksi, "INSERT INTO pemesanan2 (tanggal_pemesanan, total_belanja) VALUES ('$tanggal_pemesanan', '$totalbelanja')");

          // Mendapatkan ID barusan
          $id_terbaru = $koneksi->insert_id;

          // Menyimpan data ke tabel pemesanan produk
          foreach ($_SESSION["keranjang"] as $id_menu => $jumlah)
          {
          //   $insert = mysqli_query($koneksi, "INSERT INTO pemesanan_produk (id_pemesanan, id_menu, jumlah) 
          //     VALUES ('$id_terbaru', '$id_menu', '$jumlah') ");
          // }          

          // Mengosongkan pesanan
          unset($_SESSION["keranjang"]); -->

          <!-- // Dialihkan ke halaman nota
          echo "<script>alert('Pemesanan Sukses!');</script>";
          echo "<script>location= 'menu.php'</script>"; -->

     
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
