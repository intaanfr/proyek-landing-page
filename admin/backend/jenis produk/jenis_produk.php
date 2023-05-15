<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title> Jenis Produk </title>
</head>

<body>
    <?php include '../navbar.php' ?>
    <div class="container">
        <h1 align=center>Jenis Produk</h1>
        <a class="btn btn-danger mb-2" href="tambah-jenis-produk.php">+ Tambah Data</a>
        <table border="1" cellspacing="0" align="center" class="table table-sm">
            <tr class="text-center">
                <th>No</th>
                <th>ID Type</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
            <tr>
                <?php
                include 'koneksi.php';

                $result = mysqli_query($koneksi, "SELECT * FROM product_type");
                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <?php $i = 1; ?>
                    <?php foreach ($result as $row) : ?>
            <tr class="text-center">
                <td><?php echo $i; ?></td>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td>
                    <a class="btn btn-warning" href="edit-jenis-produk.php?id=<?php echo $row['id']; ?>">EDIT</a>
                    <a class="btn btn-danger" href="hapus-jenis-produk.php?id=<?php echo $row['id']; ?>">HAPUS</a>
                </td>

            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    <?php } ?>
        </table>
    </div>
</body>

</html>