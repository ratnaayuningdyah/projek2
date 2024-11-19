<?php

    require_once('koneksi.php');
    $sql = "SELECT * FROM daftar_sekolah";
    $result = $conn->query($sql);

    $daftar_sekolah = $result->fatch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv Ratna</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>DAFTAR SEKOLAH</h1>
    <table>
        <tr>
            <th>#</th>
            <th>KODE</th>
            <th>NAMA SEKOLAH</th>
            <th>KELURAHAN</th>
            <th>KECAMATAN</th>
            <th>STATUS SEKOLAH</th>
            <th>IKUT PPDB</th>
        </tr>
        <?php
            foreach ($daftar_sekolah as $key => $row) {
        ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $row['kode'] ?></td>
                <td><?php echo $row['nama_sekolah'] ?></td>
                <td><?php echo $row['kelurahan'] ?></td>
                <td><?php echo $row['kecamatan'] ?></td>
                <td><?php echo $row['status_sekolah'] ?></td>
                <td><?php echo $row['ikut_ppdb'] ?></td>
            </tr> 
        <?php } ?>
    </table>
</body>
</htmL>