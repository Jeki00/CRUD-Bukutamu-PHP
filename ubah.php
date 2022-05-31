<?php
$id = $_GET["id"]; 
$conn = mysqli_connect("localhost", "root","", "pemweb");
$tamu = mysqli_query($conn, "SELECT * FROM bukutamu WHERE nomor=$id");
$data = [];
while($row = mysqli_fetch_assoc($tamu)){
    $data = $row;
}

date_default_timezone_set('Asia/Jakarta');
if(isset($_POST["ubah"])){
    $id = htmlspecialchars($_POST["id"]);
    $nama = htmlspecialchars($_POST["nama"]) ;
    $email = htmlspecialchars($_POST["email"]);
    $tanggal = date('Y-m-d H:i:s');
    $komentar = htmlspecialchars($_POST["komentar"]);

    $kueri = "UPDATE bukutamu SET nama='$nama', email='$email', tanggal = '$tanggal', komentar = '$komentar'
                WHERE nomor = $id ";
    mysqli_query($conn, $kueri);
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
        <input type="hidden" name="id" value="<?= $data["nomor"]; ?>">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?= $data["nama"]; ?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="email" value="<?= $data["email"]; ?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
        <textarea class="form-control" name="komentar" id="komentar" rows="3" value=""><?= $data["komentar"];?></textarea>
    </div>
        <button type="submit" class="btn btn-success btn-sm" name="ubah">Ubah</button>
    </form>
</body>
</html>
