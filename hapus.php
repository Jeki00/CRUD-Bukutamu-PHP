<?php
$id = $_GET["id"]; 
$conn = mysqli_connect("localhost", "root","", "pemweb");
mysqli_query($conn,"DELETE FROM bukutamu
WHERE nomor = $id")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Refresh" content="0; url='index.php'" />
    <title>Document</title>
</head>
<body>
    
</body>
</html>