<?php
include "koneksi.php";
$id = $_POST['id'];
$name = $_POST['name'];

$sql = "INSERT INTO product_type VALUES ('$id','$name')";
$query = mysqli_query($koneksi, $sql);
?>
<script language="javascript">
	alert('Data Berhasil Disimpan');
	document.location.href = "jenis_produk.php";
</script>
<?php
?>