<?php
//meminta jembatan koneksi ke database
include "koneksi.php";
//menerima inputan
$id = $_POST['id'];
$sku = $_POST['sku'];
$name = $_POST['name'];
$purchase_price = $_POST['purchase_price'];
$sell_price = $_POST['sell_price'];
$stock = $_POST['stock'];
$min_stock = $_POST['min_stock'];
$product_type_id = $_POST['product_type_id'];
$restock_id = $_POST['restock_id'];



//sesuaikan dengan kebutuhan


//input ke tabel db
{ //query simpan ke db
    $sql = "UPDATE product SET id='$id', sku='$sku', name='$name', purchase_price='$purchase_price', sell_price='$sell_price', stock='$stock', min_stock='$min_stock', product_type_id='$product_type_id', restock_id='$restock_id' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

?>
    <script language="javascript">
        alert('Data Berhasil Disimpan');
        document.location.href = "produk.php";
    </script>
<?php
} ?> <!--tutup php--->