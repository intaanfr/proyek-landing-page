<?php
//meminta jembatan koneksi ke database
include "koneksi.php";
//menerima inputan

$nama = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$card = $_POST['card_id'];
$id = $_POST['id'];
//pemerikasaan jika ada data inputan kosong
//sesuaikan dengan kebutuhan

{ //query simpan ke db
    $sql = "UPDATE customer SET name ='$nama', gender='$gender', phone='$phone',email='$email', address='$address', card_id='$card' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));


?>
    <script language="javascript">
        alert('Data Berhasil Disimpan');
        document.location.href = "customer.php";
    </script>
<?php
} ?> <!--tutup php--->