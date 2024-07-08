<?php
include('cruduser.php');
$username=$_POST['Username'];
$password=$_POST['Password'];
$nama=$_POST['Nama'];


$hasil = tambahUSer($username, $password, $nama);
if($hasil > 0){
    header("location:bacauser.php");
}else{
    echo "GAGAL MENMBAHKAN DATA!";
    header("location:tambahuser.php");
}
?>