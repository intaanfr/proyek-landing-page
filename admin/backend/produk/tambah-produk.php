<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Isi Data Stock</title>
</head>

<body>
    <?php include '../navbar.php' ?>
    <div class="container">
        <h1 align=center>Isi Data Stock</h1>
        <a class="btn btn-dark mb-2" href="produk.php">Kembali Lihat Data</a>
        <form action="isi-produk.php" method="POST">
            <table class="table table-striped " align="center" border="1">
                <tr>
                    <td>SKU</td>
                    <td>:</td>
                    <td><input type="text" name="sku" class="input-group mb-3"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="name" class="input-group mb-3"></td>
                </tr>
                <tr>
                    <td>Purchase</td>
                    <td>:</td>
                    <td><input type="number" name="purchase_price" class="input-group mb-3"></td>
                </tr>
                <tr>
                    <td>Sell</td>
                    <td>:</td>
                    <td><input type="number" name="sell_price" class="input-group mb-3"></td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td>:</td>
                    <td><input type="number" name="stock" class="input-group mb-3"></td>
                </tr>
                <tr>
                    <td>Min</td>
                    <td>:</td>
                    <td><input type="text" name="min_stock" class="input-group mb-3"></td>
                </tr>
                <tr>
                    <td>Produk Type ID</td>
                    <td>:</td>
                    <td>
                        <select class="form-select mb-3" name="product_type_id">
                            <?php
                            include "koneksi.php";
                            $query = mysqli_query($koneksi, "SELECT * FROM product_type");
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>

                <tr>
                    <td>Restock ID</td>
                    <td>:</td>
                    <td>
                        <select class="form-select mb-3" name="restock_id">
                            <?php
                            include "koneksi.php";
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
                    <td colspan="3"><input type="submit" name=kirim class="btn btn-danger"></button>
                        <input type="reset" name=reset class="btn btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>