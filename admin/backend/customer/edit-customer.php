<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Edit Data Pelanggan</title>
</head>

<body>
    <?php
    include '../navbar.php';
    include 'koneksi.php';

    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $sql = "SELECT * FROM customer WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
    }
    ?>



    <div class="container">
        <h1 align=center>Edit Data Customer</h1>
        <form action="proses-edit-customer.php" method="POST">
            <table align="center" class="table table-striped ">
                <tr>
                    <td>Id</td>
                    <td>:</td>
                    <td><input class="input-group mb-3" type="text" name="id" value="<?php echo $row['id'] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input class="input-group mb-3" type="text" name="name" value="<?php echo $row['name'] ?>"></td>
                </tr>
                <tr>
                    <td>Gender/td>
                    <td>:</td>
                    <td>
                        <select class="form-select mb-3" name="gender">
                            <option value="L">L</option>
                            <option value="2">P</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>:</td>
                    <td><input class="input-group mb-3" type="number" name="phone" value="<?php echo $row['phone'] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input class="input-group mb-3" type="email" name="email" value="<?php echo $row['email'] ?>"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td><input class="input-group mb-3" type="text" name="address" value="<?php echo $row['address'] ?>"></td>
                </tr>
                <tr>
                    <td>Select Card</td>
                    <td>:</td>
                    <td>
                        <select class="form-select mb-3" name="card_id">
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM card");
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><input class="btn btn-success" type="submit" name=kirim>
                        <a class="btn btn-danger" href="customer.php">Batal</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>