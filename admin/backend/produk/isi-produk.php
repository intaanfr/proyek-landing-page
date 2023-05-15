<?php
include "koneksi.php";


$id = $_POST['id'];
$sku = $_POST['sku'];
$name = $_POST['name'];
$purchase_price = $_POST['purchase_price'];
$sell_price = $_POST['sell_price'];
$stock = $_POST['stock'];
$min_stock = $_POST['min_stock'];
$product_type_id = $_POST['product_type_id'];
$restock_id = $_POST['restock_id'];


$sql = "INSERT INTO product VALUES ('$id','$sku','$name','$purchase_price','$sell_price','$stock','$min_stock','$product_type_id','$restock_id')";
$query = mysqli_query($koneksi, $sql);
?>
<script language="javascript">
    alert('Data Berhasil Disimpan');
    document.location.href = "produk.php";
</script>
<?php
?>