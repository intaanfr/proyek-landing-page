<?php
//meminta jembatan koneksi ke database
include "koneksi.php";
//menerima inputan
$id = $_POST['id'];
$name = $_POST['name'];



//sesuaikan dengan kebutuhan


//input ke tabel db
{ //query simpan ke db
	$sql = "UPDATE product_type SET id='$id', name='$name' WHERE id='$id'";
	$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

?>
	<script language="javascript">
		alert('Data Berhasil Disimpan');
		document.location.href = "jenis_produk.php";
	</script>
<?php
} ?> <!--tutup php--->