<?php
/* 
	Punya Arya
`	Buat halaman untuk menghitung luas segitiga dimana inputan berasal
	dari kode program
 
	Luas Segitiga
	alas = 10 
	tinggi = 20
	Luas = 100
*/
	function luassegitiga($alas, $tinggi) {
		return $alas * $tinggi * 0.5;
	}
 
	$a = [10,20,30,40,50,60,70,80,90,100];
	$t = [20,40,60,80,100,120,140,160,180,200];
	//$hasil = luassegitiga(10,20);
	//echo "Luas segitiga dari " . $hasil;
 
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Fungsi</title>
</head>
<body>
	Table Luas Segitiga
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
				for ($i=0; $i < count($a); $i++) {
			?>
			<tr>
				<td><?php echo $i + 1; ?></td>
				<td><?php echo $a[$i]; ?></td>
				<td><?php echo $t[$i]; ?></td>
				<td><?php echo luassegitiga($a[$i], $t[$i]); ?></td>
			</tr>
			<?php 
				}
			?>
		</tbody>
	</table>
</body>
</html>