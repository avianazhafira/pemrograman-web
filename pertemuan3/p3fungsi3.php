//tabel luas segitiga aray tidak menggunakan pengulangan
<?php 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function luasSegitiga($alas,$tinggi){
            return 0.5 *$alas*$tinggi; 
        }
        $no=["1","2","3"];
        $a=["10","20","30"];
        $t=["20","30","40"];
    ?>
    <br> Tabel Luas Segitiga
    <table width="800" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Alas</th>
                <th>Tinggi</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $no[0]; ?></td>
                <td><?php echo $a[0]; ?> </td>
                <td><?php echo $t[0]; ?> </td>
                <td><?php echo luasSegitiga($a[0],$t[0]); ?> </td>
            </tr>

            <tr>
                <td><?php echo $no[1]; ?></td>
                <td><?php echo $a[1]; ?> </td>
                <td><?php echo $t[1]; ?> </td>
                <td><?php echo luasSegitiga($a[1],$t[1]); ?> </td>
            </tr>

            <tr>
                <td><?php echo $no[2]; ?></td>
                <td><?php echo $a[2]; ?> </td>
                <td><?php echo $t[2]; ?> </td>
                <td><?php echo luasSegitiga($a[2],$t[2]); ?> </td>
            </tr>
        </tbody>
    </table>
</body>
</html>