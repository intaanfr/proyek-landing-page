<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Lihat Stock </title>
</head>
<?php include '../navbar.php'; ?>

<body>
    <div class="container">
        <h1 align=center> Order</h1>
        <!-- ini yang di ganti btn danger -->
        <a class="btn btn-danger mb-2" href="tambah-order.php">+ Tambah Data</a>
        <!-- abis -->
        <table border="1" cellspacing="1" align="center" class="table table-sm">
            <tr class="text-center bg-info ">
                <th>No </th>
                <th>ID PO</th>
                <th>Order Number</th>
                <th>Date</th>
                <th>Qty</th>
                <th>Total Price</th>
                <th>Customer ID</th>
                <th>Product ID</th>
                <th>Action</th>

            </tr>
            <tr>
                <?php
                include 'koneksi.php';

                $result = mysqli_query($koneksi, "SELECT * FROM `order`");
                while ($row = mysqli_fetch_assoc($result)) {

                ?>

                    <?php $i = 1; ?>
                    <?php foreach ($result as $row) : ?>
            <tr class="text-center">
                <td><?php echo $i; ?></td>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['order_number']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['qty']; ?></td>
                <td><?php echo $row['total_price']; ?></td>
                <td><?php echo $row['customer_id']; ?></td>
                <td><?php echo $row['product_id']; ?></td>
                <td>
                    <a class="btn btn-danger" href="hapus-order.php?id=<?php echo $row['id']; ?>">HAPUS</a>
                    <a class="btn btn-warning" href="edit-order.php?id=<?php echo $row['id']; ?>">EDIT</a>
                </td>

            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    <?php } ?>
        </table>
    </div>
</body>

</html>