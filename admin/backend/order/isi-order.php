<?php
include "koneksi.php";


$id = $_POST['id'];
$order_number = $_POST['order_number'];
$date = $_POST['date'];
$qty = $_POST['qty'];
$total_price = $_POST['total_price'];
$customer_id = $_POST['customer_id'];
$product_id = $_POST['product_id'];


$sql = "INSERT INTO `order` VALUES ('$id','$order_number','$date','$qty','$total_price','$customer_id','$product_id')";
$query = mysqli_query($koneksi, $sql);
?>
<script language="javascript">
    alert('Data Berhasil Disimpan');
    document.location.href = "order.php";
</script>
<?php
?>