<?php
//meminta jembatan koneksi ke database
include "koneksi.php";
//menerima inputan
$id = $_POST['id'];
$order_number = $_POST['order_number'];
$date = $_POST['date'];
$qty = $_POST['qty'];
$total_price = $_POST['total_price'];
$customer_id = $_POST['customer_id'];
$product_id = $_POST['product_id'];


//sesuaikan dengan kebutuhan


//input ke tabel db
{ //query simpan ke db
    $sql = "UPDATE `order` SET id='$id', order_number='$order_number', date='$date', qty='$qty', total_price='$total_price', customer_id='$customer_id', product_id='$product_id' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

?>
    <script language="javascript">
        alert('Data Berhasil Disimpan');
        document.location.href = "order.php";
    </script>
<?php
} ?> <!--tutup php--->