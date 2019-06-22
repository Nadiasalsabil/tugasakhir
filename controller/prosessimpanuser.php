<?php
	
include 'koneksi.php';

    $nama       =   $_POST['nama'];
    $email      =   $_POST['email'];
    $telepon    =   $_POST['telepon'];
    $username   =   $_POST['username'];
    $password   =   md5($_POST['password']);
    $level      =   $_POST['level'];
    $keterangan =   $_POST['keterangan'];


$input="INSERT INTO table_user(id_user,nama_user,email,telepon,username,password,status,keterangan)values('','$nama','$email','$telepon','$username'
                        ,'$password','$level','$keterangan')";
$data=mysqli_query($koneksi,$input) or die (mysqli_error($koneksi));

if($data){
	echo "<script>alert('Success! Data Added');</script>";
	echo "<script>location='../admin/index.php?halaman=datauser';</script>";
}else{
    echo "<script>alert('Update Data Failed!');</script>";
    echo "<script>location='../admin/index.php?halaman=datauser';</script>";
}

?>


