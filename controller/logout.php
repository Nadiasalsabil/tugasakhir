<?php
session_start();

unset($_SESSION['username']);
session_destroy();
echo "<script>alert('Yakin Anda Akan Logout dari halaman ini?')</script>";
echo "<script>location='../index.php';</script>";
?>
