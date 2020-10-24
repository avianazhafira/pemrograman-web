<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mahasiswa</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    
</head>
<body>
    <div class="container">
        <h2>Registrasi Mahasiswa</h2>
        <form method="post" action="konfirmasi_reg.php">
            <div class="form-group"> 
                <label>Nama</label>
                <input class="form-control" type="text" name="nama_mhs">
            </div>
            <div class="form-group"> 
                <label>NIM</label>
                <input class="form-control" type="text" name="nim">
            </div>
            <div class="form-group"> 
                <label>Program Studi</label>
                <select class="form-control" type="option" name="prodi_mhs">
                <option value="pilih"> Pilih </option>
                <option value="AKT"> Akuntansi </option>
                <option value="ARS"> Arsitektur </option>
                <option value="INF"> Informatika </option>
                </select>
            </div>
            <div class="form-group"> 
                <label>email</label>
                <input class="form-control" type="text" name="email_mhs">
            </div>
            <div class="form-group"> 
                <label>Password</label>
                <input class="form-control" type="password" name="password_mhs">
            </div> 
            <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Submit">
        </form>
    </div>            
   
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootst

</body>
</html>