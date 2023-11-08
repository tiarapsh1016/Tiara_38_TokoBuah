<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_menu=mysqli_query($conn,"select * from menu where id_menu = '".$_GET['id_menu']."'");
    $dt_menu=mysqli_fetch_array($qry_detail_menu);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<h2>Pinjam Buku</h2>
<div class="row">
    <div class="col-md-4">
        <!-- <img src="asset/foto_produk/<?=$dt_menu['foto']?>" class="card-img-top"> -->
    </div>
    
    <div class="col-md-8">
        <br><br>
        <div class="position-fixed">
        <br><br><br><br>
        <form action="masukkan.php?id_menu=<?=$dt_menu['id_menu']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        
                        <td>Nama Menu</td><td><?=$dt_menu['nama_menu']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$dt_menu['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Order</td><td><input type="number" name="jumlah_order" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="ORDER"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



