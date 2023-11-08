<?php
// $conn=mysqli_connect("localhost","root","","catering");

// if(!$conn){
//     die("Koneksi Gagal: ". mysqli_connect_error());
// }else{
//     echo "Koneksi berhasil";
// }

$conn=mysqli_connect('localhost','root','','catering');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
