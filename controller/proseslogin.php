<?php
    include "koneksi.php";

    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

    $sql        = "SELECT * FROM table_user WHERE username = '$username' AND password = '$password'";
    $query      = mysqli_query($koneksi,$sql) OR DIE(mysqli_query($koneksi));
    $jmlrecord  = mysqli_num_rows($query);

    $data       = mysqli_fetch_array($query);
    $username   = $data['username'];
    $status     = $data['status'];

    if($jmlrecord > 0){

        session_start();

            $_SESSION['username']   = $username;
            $_SESSION['password']   = $password;
            
            if($status=='Admin'){
                echo "<script>alert('Success! Data Added');</script>";
	            echo "<script>location='../admin/index.php?halaman=beranda';</script>";
            }
            elseif($status=='User'){
                echo "<script>alert('Success! Data Added');</script>";
                echo "<script>location='../user/index.php?halaman=beranda';</script>";

            }       

    }else{

        echo "<script>alert('Failed!Username atau Password anda salah silahkan login lagi');</script>";
        echo "<script>location='../login/index.php';</script>";

    }




?>