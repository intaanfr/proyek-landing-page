<?php
include  "koneksi.php";

$id = $_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$card = $_POST['card_id'];

$sql = "INSERT INTO customer VALUES ('$id','$name','$gender','$phone','$email','$address','$card')";
$query = mysqli_query($koneksi, $sql);

?>

<script language="javascript">
    alert('Data Berhasil Disimpan');
    document.location.href = "customer.php";
</script>
<?php
?>