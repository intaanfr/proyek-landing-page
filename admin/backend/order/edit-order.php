<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Edit Order</title>
</head>

<body>
    <?php
    include 'koneksi.php';
    include '../navbar.php';

    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $sql = "SELECT * FROM `order` WHERE id ='$id'";
    $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
    }
    ?>
    <div class="container">

        <h1 align=center>Edit order</h1>
        <form action="proses-order.php" method="POST">
            <table class="table table-striped " align="center" border="1">
                <tr>
                    <td>ID</td>
                    <td>:</td>
                    <td><input readonly type="text" name=id class="input-group  mb-3" value="<?php echo $row['id']; ?>"></td>
                </tr>
                <tr>
                    <td>Order Number</td>
                    <td>:</td>
                    <td><input type="text" name=order_number class="input-group  mb-3" value="<?php echo $row['order_number']; ?>"></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>:</td>
                    <td><input type="datetime-local" name=date class="input-group  mb-3" value="<?php echo $row['date']; ?>"></td>
                </tr>
                <tr>
                    <td>Qty</td>
                    <td>:</td>
                    <td><input type="number" name=qty class="input-group  mb-3" value="<?php echo $row['qty']; ?>"></td>
                </tr>
                <tr>
                    <td>Total Price</td>
                    <td>:</td>
                    <td><input type="number" name=total_price class="input-group  mb-3" value="<?php echo $row['total_price']; ?>"></td>
                </tr>
                <tr>
                    <td>Customer </td>
                    <td>:</td>
                    <td><select class="form-select mb-3" name="customer_id">
                            <?php
                            include "koneksi.php";
                            $query = mysqli_query($koneksi, "SELECT * FROM customer");
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Product ID</td>
                    <td>:</td>
                    <td>
                        <select class="form-select mb-3" name="product_id">
                            <?php
                            include "koneksi.php";
                            $query = mysqli_query($koneksi, "SELECT * FROM product");
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" name=kirim value="Simpan" class="btn btn-danger"></button>
                        <a class="btn btn-warning" href="produk.php">Batal</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>