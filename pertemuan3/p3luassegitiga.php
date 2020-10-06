<?php 
    function luasSegitiga($alas,$tinggi){
    return 0.5 *$alas*$tinggi; 
}
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
$a=10;
$t=20;
?>
    Tabel Luas Segitiga
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
                <td>1</td>
                <td><?php echo $a; ?> </td>
                <td><?php echo $t; ?> </td>
                <td><?php echo luasSegitiga($a,$t); ?> </td>
            </tr>
        </tbody>
    </table>
</body>
</html>