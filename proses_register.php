<?php
if($_POST){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    if(empty($nama)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($email)){
        echo "<script>alert('Email tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='register.php';</script>";
    }elseif(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO `user`(`nama`, `email`, `username`, `password`) VALUES ('$nama','$email','$username','$password')");

        if($insert){
            echo "<script>alert('sukses menambahkan');location.href='login.php';</script>";
        }else{
            echo "<script>alert('gagal');location.href='register.php';</script>";
            }
        }
    }
    ?>
       