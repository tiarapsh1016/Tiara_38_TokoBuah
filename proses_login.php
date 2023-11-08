<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        if(empty($username)){
            echo "<script>alert('Please insert an username');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Please insert a password');location.href='login.php';</script>";
        } else {
            include "koneksi.php";

            // $qry_login=mysqli_query($conn,"SELECT * from user where username = '".$username."'  and password = '".($password)."'");

            // if(mysqli_num_rows($qry_login)>0){
            //     $dt_login=mysqli_fetch_array($qry_login);
            $login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
                session_start();
            }
            if($data['role']=="admin"){
 
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['passoword'] = $password;
                $_SESSION['role'] = "admin";
                // alihkan ke halaman dashboard admin
                header("location:admin_home.php");
         
            // cek jika user login sebagai pegawai
            }else if($data['role']=="user"){
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['role'] = "user";
                // alihkan ke halaman dashboard pegawai
                header("location:home.php");
  }
        }
}
?>