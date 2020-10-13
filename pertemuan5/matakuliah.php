<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    
</head>
<body>
    <div class="container">
        <h2>Pengisian Matakuliah</h2>
        <form method="post" action="konfirmasi_mk.php">
            <div class="form-group"> 
                <label>Kode Matakuliah</label>
                <input class="form-control" type="text" name="kode_mk">
            </div>
            <div class="form-group"> 
                <label>Nama Matakuliah</label>
                <input class="form-control" type="text" name="nama_mk">
            </div>
            <div class="form-group"> 
                <label>Kategori matakuliah</label>
                <select class="form-control" type="option" name="kategori_mk">
                <option value="pilih"> Pilih </option>
                <option value="MKMA"> Mata Kuliah Major </option>
                <option value="MKMI"> Mata Kuliah Minor </option>
                <option value="MKPIL"> Mata Kuliah Pilihan </option>
                <!-- <option> MKMA </option>
                <option> MKMI </option>
                <option> MKPIL </option> -->
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootst

</body>
</html>