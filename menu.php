<?php 
    include "header.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
       
        </div>
    </div>
    <div class="text">
     <div class="col-md-3 text-center mx-auto ">
        <br><br><br><br>
    <h2>Menu</h2>
    </div>
    </div>
    <div class="row">
        <?php 
       include "koneksi.php";
        $qry_menu=mysqli_query($conn,"select * from menu");
        while($dt_menu=mysqli_fetch_array($qry_menu)){
            ?>
            <div class="col-md-3 mx-3 mt-4">
                 <div class="card">
                  <img src="<?=$dt_menu['foto']?>" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title"><?=$dt_menu['nama_menu']?></h5>
                    <p class="card-text"><?=substr($dt_menu['deskripsi'], 0,1000)?></p>
                    <p class="card-text">$<?=$dt_menu['harga_pcs']?></p>
                    <a href="transaksi.php?id_menu=<?=$dt_menu['id_menu']?>" class="btn btn-primary">Order</a>
                  </div>
                </div>
            </div>
    </div>
        </div>
    
    <?php
        }
        ?>
    <!-- 
        include "footer.php";
    ?> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>

 
