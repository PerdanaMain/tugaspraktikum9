<?php
include("koneksi.inc.php");

$q = "SELECT * FROM kontak ORDER BY nama";

$sql = mysqli_query($conn,$q);
if (!$sql) {
    die("Gagal Cetak data");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>PROGRAM KONTAK</title>
</head>
<body>
    
    <div class="container mt-5">
        <h3 class="alert alert-info fst text-center">DATA KONTAK</h3>
        <table class="table table-bordered border-dark">
            <tr class="table-active text-center">
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Pesan</th>
            </tr>
            <tr>
            <?php
            $no=1;
            while($hasil = mysqli_fetch_row($sql)){
                echo "<tr>
                <td>$no</td>
                <td>$hasil[1]</td>
                <td>$hasil[2]</td>
                <td>$hasil[3]</td>
                <td>$hasil[4]</td>
                <td>$hasil[5]</td>
                <td>$hasil[6]</td>
                </tr>";
                $no++;
            }
            ?>
            </tr>
        </table>
        <a href="index.php" role="button" class="btn btn-danger">
            KEMBALI
        </a>
    </div>
</body>
</html>