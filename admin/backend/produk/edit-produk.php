<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Edit Jenis Produk</title>
</head>

<body>
    <?php
    include 'koneksi.php';
    include '../navbar.php';

    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $sql = "SELECT * FROM product WHERE id ='$id'";
    $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
    }
    ?>
    <div class="container">

        <h1 align=center>Edit Jenis Produk</h1>
        <form action="proses-produk.php" method="POST">
            <table class="table table-striped " align="center" border="1">
                <tr>
                    <td>ID</td>
                    <td>:</td>
                    <td><input readonly type="text" name=id class="input-group  mb-3" value="<?php echo $row['id']; ?>"></td>
                </tr>
                <tr>
                    <td>SKU</td>
                    <td>:</td>
                    <td><input type="text" name="sku" class="input-group  mb-3" value="<?php echo $row['sku']; ?>"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type="text" name=name class="input-group  mb-3" value="<?php echo $row['name']; ?>"></td>
                </tr>
                <tr>
                    <td>Purchase Price</td>
                    <td>:</td>
                    <td><input type="number" name="purchase_price" class="input-group  mb-3" value="<?php echo $row['purchase_price']; ?>"></td>
                </tr>
                <tr>
                    <td>Sell Price</td>
                    <td>:</td>
                    <td><input type="number" name="sell_price" class="input-group  mb-3" value="<?php echo $row['sell_price']; ?>"></td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td>:</td>
                    <td><input type="number" name="stock" class="input-group  mb-3" value="<?php echo $row['stock']; ?>"></td>
                </tr>
                <tr>
                    <td>Min</td>
                    <td>:</td>
                    <td><input type="number" name="min_stock" class="input-group  mb-3" value="<?php echo $row['min_stock']; ?>"></td>
                </tr>
                <tr>
                    <td>Product Type ID</td>
                    <td>:</td>
                    <td>
                        <select class="form-select mb-3" name="product_type_id">
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM product_type");
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Restock ID</td>
                    <td>:</td>
                    <td>
                        <select class="form-select mb-3" name="restock_id">
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM restock");
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <option value="<?php echo $row["id"]; ?>"><?php echo $row["restock_number"]; ?></option>
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