<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>
    <?php   
    include_once "header.php";
    include_once "koneksi_mk.php";
    if(isset($_GET['kode_mk'])){
        $kode_mk= $_GET['kode_mk'];
        $strSQL ="SELECT * FROM matakuliah WHERE kode_mk='".$kode_mk."'";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0 ){
            while($row = mysqli_fetch_assoc($runStrSQL)){
                $nama_mk= $row["nama_mk"];
                $kategori_mk= $row["kategori_mk"];
                $SKS = $row["SKS"];
            }
        }
    } 
    else {
        header("location:list_mk.php");
    }  
    $disableForm = isset($_GET['kode_mk'])?"enabled": "disabled";        
    ?>
    <div class="container">
        <h2>Edit Mata Kuliah</h2>   
    <!-- Ini Modal -->
        <div class="modal" id="pesan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- ini header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Pengeditan</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- body -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-6"><b>Kode Mata Kuliah</b></div>
                                <div class="col-6"><span id="kodemk"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Mata Kuliah</b></div>
                                <div class="col-6"><span id="namamk"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Kategori</b></div>
                                <div class="col-6"><span id="kategorimk"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>SKS</b></div>
                                <div class="col-6"><span id="sksmk"></span> sks</div>
                            </div>
                        </div>
                    </div>

                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Edit</button>
                        <button id="proses" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- ini end modal -->
        
        <form id="myform" method="post" action="update.php">
            <div class="form-group">
                <label>Kode Mata Kuliah</label>
                <input id="kode_mk" class="form-control" type="text" name="kode_mk" value="<?php echo $kode_mk ?>" readonly <?php echo $disableForm ?>  >
            </div>
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input id="nama_mk" class="form-control" type="text" name="nama_mk" value="<?php echo $nama_mk ?>" <?php echo $disableForm ?> >
            </div>
            <div class="form-group">
                <label>Kategori Mata Kuliah</label>
                <select id="kategori_mk" name="kategori_mk" class="form-control" <?php echo $disableForm ?> >
                <option value="pilih">Pilih</option>
                <option value="MKMA">Mata Kuliah Major</option>
                <option value="MKMI">Mata Kuliah Minor</option>
                <option value="MKPIL">Mata Kuliah Pilihan</option>
                </select>
            </div>
            <div class="form-group">
                <label>SKS</label>
                <input id="SKS" class="form-control" type="text" name="SKS" value="<?php echo $SKS ?>" <?php echo $disableForm ?> >
            </div>           
                <input class="btn btn-primary" type="button" id="tombol" value="Simpan">   
        </form>
        
    </div>
    <?php include_once "footer.php"; ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#proses').click(function(){
            $('#myform').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const kode_mk = $('#kode_mk').val();
            const nama_mk = $('#nama_mk').val();
            const kategori_mk = $('#kategori_mk').val();
            const SKS = $('#SKS').val();

            $('#kodemk').text(kode_mk);
            $('#namamk').text(nama_mk);
            $('#kategorimk').text(kategori_mk);
            $('#sksmk').text(SKS);
         
            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    
    </script>
</body>
</html>