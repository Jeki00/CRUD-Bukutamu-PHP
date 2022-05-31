<?php
$conn = mysqli_connect("localhost", "root","", "pemweb");
date_default_timezone_set('Asia/Jakarta');
if(isset($_POST["submit"])){
    $nama = htmlspecialchars($_POST["nama"]) ;
    $email = htmlspecialchars($_POST["email"]);
    $tanggal = date('Y-m-d H:i:s');
    $komentar = htmlspecialchars($_POST["komentar"]);

    $query = "INSERT INTO bukutamu (nama, email, tanggal, komentar)VALUES('$nama','$email','$tanggal','$komentar')";
    mysqli_query($conn, $query);
    ?>
    <script>
		document.location.href = 'index.php';
    </script>
    <?php
}
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
    <h1>Tambah Tamu</h1>
    <form action="" method="POST">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Firstname Lastname">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
        <textarea class="form-control" name="komentar" id="komentar" rows="3"></textarea>
    </div>
        <button type="submit" class="btn btn-success btn-sm" name="submit">tambahkan</button>
    </form>
</body>
</html>