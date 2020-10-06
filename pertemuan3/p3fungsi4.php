//menggunakan array dua dimensi dan pengulangan


 
<!DOCTYPE html>
<html>
<head>
	<title>Fungsi</title>
</head>
<body>
	<br> Table Luas Segitiga
	<table width="800px" border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Alas</th>
				<th>Tinggi</th>
				<th>Hasil</th>
			</tr>
		</thead>
		<tbody>
            <?php 
                function luassegitiga($alas, $tinggi) {
                     return $alas * $tinggi * 0.5; }
            
                    $data =[[10,20],[20,40],[30,24]];

                    for($i=0; $i < count($data); $i++){
                        echo"<tr>";
                        $a = $data[$i][0];
                        $t = $data[$i][1];
                     
            ?>
            <tr>
				<td><?php echo $i+1 ?> </td>
				<td><?php echo $a ?> </td>
				<td><?php echo $t ?> </td>
                <td><?php echo luassegitiga($a, $t) ?></td>
            </tr>
            <?php
               }
            ?>
		</tbody>
	</table>
</body>
</html>