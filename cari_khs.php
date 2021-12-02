<?php 
	include'koneksi.php';
 ?>

 <h3>Form Pencarian DATA KHS Dengan PHP</h3>

 	<form  action="" method="get">
 		<label>Cari</label>
 		<input type="text" name="cari">
 		<input type="submit" name="Cari">
 	</form>

 	<?php 
 		if (isset($_GET['cari'])) {
 			// code...
 			$cari = $_GET['cari'];
 			echo "<b>Hasil Pencarian:".$cari."</b>";
 		}
	?>

	<table border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Kode MK</th>
			<th>Nilai</th>
		</tr>
		<?php 
		if (isset($_GET['cari'])) {
			// code...
			$cari=$_GET['cari'];
			$sql="select * from KHS where nim='".$cari."";
		$tampil=mysqli_query($con,$sql);
		}else{
			$sql="select * from KHS";
			$tampil=mysqli_query($con,$sql);
		}
		$no=1;
		while($r = mysqli_fetch_array($tampil)){

		 ?>
		 <tr>
		 	<td><?php echo $no++; ?></td>
		 	<td><?php $r['NIM']; ?></td>
		 	<td><?php $r['kodeMK']; ?></td>
		 	<td><?php $r['nilai']; ?></td>
		 </tr>
		<?php } ?>
	</table>
