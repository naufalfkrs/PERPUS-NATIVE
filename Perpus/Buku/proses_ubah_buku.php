<?php
if($_POST){
    $id_buku=$_POST['id_buku'];
    $nama_buku=$_POST['nama_buku'];
    $pengarang=$_POST['pengarang'];
    $deskripsi=$_POST['deskripsi'];
    $foto=$_POST['foto'];
    if(empty($nama_buku)){
        echo "<script>alert('Nama buku tidak boleh kosong');location.href='ubah_buku.php';</script>";    
    } elseif(empty($pengarang)){
        echo "<script>alert('Pengarang tidak boleh kosong');location.href='ubah_buku.php';</script>";
    } elseif(empty($deskripsi)){
        echo "<script>alert('Deskripsi tidak boleh kosong');location.href='ubah_buku.php';</script>";
    } else {
        include "../perpus_native.php";
        $update=mysqli_query($conn,"update buku set nama_buku='".$nama_buku."',pengarang='".$pengarang."',deskripsi='".$deskripsi."',foto='".$foto."' where id_buku = '".$id_buku."' ") or die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update buku');location.href='tampil_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal update buku');location.href='ubah_buku.php?id_produk=".$id_buku."';</script>";
        }
    }
}
?>