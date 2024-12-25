<?php include("inc_header.php")?>
<?php
$Judul     ="";
$isi       ="";
$Kutipan   ="";
$Error     ="";
$Sukses    ="";

if(isset($_POST['Simpan'])){
    $Judul     = $_POST['Judul'];
    $isi       = $_POST['isi'];
    $Kutipan   = $_POST['Kutipan'];

    if($Judul == '' or $isi == ''){
        $Error     = "Silahkan masukan semua data";
    }

    if(empty($Error)){
        $sql1     = "insert into halaman(Judul, isi, Kutipan) values('$Judul', '$isi', '$Kutipan')";
        $q1      = mysqli_query($koneksi, $sql1);
        if($q1){
            $Sukses    = "Data berhasil di simpan";
        }else{
            $Error     = "Data gagal di simpan";
        }
    }
}
?>
<h1>Halaman Admin</h1>
<div class="mb-3 row">
    <a href="halaman.php"><< Kembali ke Halaman Admin</a>
</div>
<?php 
if($Error){
    ?>
    <div class="alert alert-danger" role="alert">
       <?php echo $Error?>
    </div>
<?php
}
?>
<?php 
if($Sukses){
    ?>
    <div class="alert alert-primary" role="alert">
       <?php echo $Sukses ?>
    </div>
<?php
}
?>
<form action="" method="post">
    <div class="mb-3 row">
        <label for="Judul" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Judul" value="<?php echo $Judul?>" name="Judul"/>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Kutipan" class="col-sm-2 col-form-label">Kutipan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Kutipan" value="<?php echo $Kutipan?>" name="Kutipan"/>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="isi" class="col-sm-2 col-form-label">isi</label>
        <div class="col-sm-10">
            <textarea name="isi"class="form-control" id="summernote"><?php echo $isi ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="Simpan" value="Simpan Data" class="btn btn-primary"/>
        </div>
    </div>
</form>
<?php include("inc_footer.php")?>