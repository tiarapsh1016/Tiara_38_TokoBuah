<?php 
    include "header.php";
    include "koneksi.php";
    session_start();

    if (isset($_GET['remove'])) {
        $remove_id = $_GET['remove'];
        mysqli_query($conn, "DELETE FROM `keranjang` WHERE id = '$remove_id'");
        header('location:keranjang.php');
     };
     
     if (isset($_GET['delete_all'])) {
        mysqli_query($conn, "DELETE FROM `keranjang`");
        header('location:keranjang.php');
     }
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
        <?php
        
        foreach ($_SESSION['keranjang']as $id_menu => $jumlah): 
            // $ambil = mysqli_query($conn, "SELECT * FROM menu");
            //   $pecah = $ambil -> fetch_assoc();
        ?>
            <tr>
                <td><?=($id_menu+1)?></td>
                <td><?=$jumlah['nama_menu']?></td>
                <td><?=$jumlah['jumlah_order']?></td>
                <td>$<?=$jumlah['harga_pcs']?></td>
                <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Hapus menu dari pesanan?')" class="btn btn-danger btn sm"> </i> Hapus</a></td>
            </tr>

        <?php 
        endforeach ?>
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
