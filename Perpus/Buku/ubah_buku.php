<!DOCTYPE html>
<html>
<head>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
    <title>Ubah Buku</title>
</head>
<body>
    <?php
    include "../perpus_native.php";
    $qry_get_siswa=mysqli_query($conn,"select * from buku where id_buku = '".$_GET['id_buku']."'");
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Buku</h3>
    <form action="proses_ubah_buku.php" method="post">
        <input type="hidden" name="id_buku" value= "<?=$dt_siswa['id_buku']?>">
        Nama Buku :
        <input type="text" name="nama_buku" value= "<?=$dt_siswa['nama_buku']?>" class="form-control">
        Pengarang :
        <input type="text" name="pengarang" value= "<?=$dt_siswa['pengarang']?>" class="form-control">
        Deskripsi : 
        <textarea name="deskripsi" class="form-control"
        rows="4"><?=$dt_siswa['deskripsi']?></textarea>
        Foto : 
        <input type="file" name="foto" value="assets/foto_produk/<?=$dt_siswa['foto']?>" class="form-control">
        <!-- <input type="file" name="foto" value="<?=$dt_siswa['foto']?>" class="form-control">
        <img src="assets/foto_produk/<?=$data_siswa['foto']?>"class="card-img-top" width="150" height="98" > -->
        <input type="submit" name="simpan" value="Ubah Buku" class="btn btn-primary">
    </form>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous"></script>
</body>
</html>