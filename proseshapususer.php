<?php
include('cruduser.php');
$username=$_GET['Username'];
$hasil = hapusUser($username);

if($hasil > 0){
    header("location:bacauser.php");
}else{
    echo "GAGAL MENGHAPUS DATA!";
    header("location:gagaltambah.php");
}
?>