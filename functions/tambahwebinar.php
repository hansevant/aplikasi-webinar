<?php
include '../connection.php';

if (isset($_POST["submit"])) {

    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    // $tanggal = mysqli_real_escape_string($con, $_POST['tanggal']);
    // $waktu = mysqli_real_escape_string($con, $_POST['waktu']);
    $deskripsi = mysqli_real_escape_string($con, $_POST['deskripsi']);

    // merubah format tanggal dan waktu
    // $date = date('d-M-Y', strtotime($tanggal));
    // $time = $waktu . " WIB";

    $nomor_acak = round(microtime(true));
    $nama_foto = $_FILES['foto']['name'];
    $tipe_foto = strtolower($_FILES['foto']['type']);
    $file_tmp = $_FILES['foto']['tmp_name'];
    $file_size = $_FILES['foto']['size'];
    $foto = $nomor_acak . '_' . $nama_foto;

    if ($file_size > 5000000) {
        echo "<script>alert('Foto terlalu besar');
        location.href='../admin/tambahwebinar.php';</script>";
    }

    if ($tipe_foto !== "image/jpeg" || $tipe_foto !== "image/jpg" || $tipe_foto !== "image/png") {

        @move_uploaded_file($file_tmp, "../assets/img/events/" . $foto);

        $query = mysqli_query($con, "INSERT INTO `events` (`nama`, `deskripsi`, `foto`) 
                                        VALUES ('$nama','$deskripsi', '$foto')
                                        ");

        echo "<script>alert('Berhasil....!!!');
            location.href='../admin/events.php';</script>";
    } else {
        echo "<script>alert('Maaf format file berkas selain JPG/PNG tidak di dukung');
            location.href='../admin/tambahwebinar.php';</script>";
    }
}
