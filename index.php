<?php
$conn = mysqli_connect("localhost", "root","", "pemweb");
$result = mysqli_query($conn,"SELECT * FROM bukutamu");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Buku Tamu</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal</th>
            <th>Komentar</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i =1;
        while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["tanggal"]; ?></td>
                <td><?= $row["komentar"]; ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="ubah.php?id=<?= $row['nomor']?>" > ubah </a>  
                    <a class="btn btn-danger btn-sm" href="hapus.php?id=<?= $row['nomor']?>" onclick="return confirm('Apakah anda yakin?');"> hapus </a> 
                </td>
            </tr>
	    <?php
        $i++;
        endwhile;
	    ?>
        </tbody>

    </table>
    <a class="btn btn-success btn-sm" href="tambah.php">Tambah Tamu</a>
</body>
</html>
