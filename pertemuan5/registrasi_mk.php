<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mata Kuliah</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>
    <?php 
    $status = 2;
    if (isset($_POST['tombolSubmit'])) {
        include_once "koneksi.php"; 
        $kode_mk = $_POST['kode_mk'];
        $nama_mk = $_POST['nama_mk'];
        $kategori_mk = $_POST['kategori_mk'];
        $SKS = $_POST['SKS'];

        //buat koneksi
        $strsql = "INSERT INTO matakuliah (kode_mk, nama_mk, kategori_mk, SKS) 
        VALUES ('$kode_mk','$nama_mk','$kategori_mk','$SKS')";
        
        $runSQL = mysqli_query($conn,$strsql);        
        if ($runSQL) {
            $status = 1; //sukses
        }  
        else {
            $status = 0; //tidak sukses;
        } 
    }            
    ?>
    <div class="container">
        <h2>Pendaftaran Mata Kuliah</h2>
    <?php 
        if ($status == 1) {
    ?>    
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Data berhasil diinput ke dalam database.
        </div>
    <?php 
        }
        else if ($status == 0){
    ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Data tidak berhasil diinput ke dalam database.
        </div>
    <?php 
        }
    
    ?>
        <form method="post" action="registrasi_mk.php">
            <div class="form-group">
                <label>Kode Mata Kuliah</label>
                <input class="form-control" type="text" name="kode_mk">
            </div>
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input class="form-control" type="text" name="nama_mk">
            </div>
            <div class="form-group">
                <label>Kategori Mata Kuliah</label>
                <select name="kategori_mk" class="form-control">
                <option value="pilih">Pilih</option>
                <option value="MKMA">Mata Kuliah Major</option>
                <option value="MKMI">Mata Kuliah Minor</option>
                <option value="MKPIL">Mata Kuliah Pilihan</option>
                </select>
            </div>
            <div class="form-group">
                <label>SKS</label>
                <input class="form-control" type="text" name="SKS">
            </div>           
                <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Simpan">   
        </form>
        
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>