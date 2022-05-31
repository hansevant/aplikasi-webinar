<?php
include 'connection.php';

// if (isset($_POST["submit"])) {

$nama = mysqli_real_escape_string($con, $_POST['nama']);
// $tanggal = mysqli_real_escape_string($con, $_POST['tanggal']);
// $waktu = mysqli_real_escape_string($con, $_POST['waktu']);
$deskripsi = mysqli_real_escape_string($con, $_POST['deskripsi']);

// merubah format tanggal dan waktu
// $date = date('d-M-Y', strtotime($tanggal));
// $time = $waktu . " WIB";

$id_webinar = $_POST['id_webinar'];
$nama_foto_lama = $_POST['foto_lama'];
$nomor_acak = round(microtime(true));
// $nama_foto_lama = $_FILES['foto_lama']['name'];
$nama_foto = $_FILES['foto']['name'];
$tipe_foto = strtolower($_FILES['foto']['type']);
$file_tmp = $_FILES['foto']['tmp_name'];
$file_size = $_FILES['foto']['size'];

if ($_FILES['foto']['error'] === 4) {
    $foto = $nama_foto_lama;

    $query = mysqli_query($con, "UPDATE events SET 
                                            nama = '$nama',
                                            foto = '$foto',
                                            deskripsi = '$deskripsi',
                                            updated_at = current_timestamp()
                                    WHERE id_webinar = '$id_webinar'
                            ");

    echo "<script>alert('Berhasil....!!!');
    location.href='../admin/events.php';</script>";
} else {
    $foto = $nomor_acak . '_' . $nama_foto;
}


if ($file_size < 5000000) {
    if ($tipe_foto == "image/jpeg" || $tipe_foto == "image/jpg" || $tipe_foto == "image/png") {
        @move_uploaded_file($file_tmp, "../assets/img/events/" . $foto);

        $query = mysqli_query($con, "UPDATE events SET 
                                                            nama = '$nama',
                                                            tanggal = '$tanggal',
                                                            waktu =' $waktu',
                                                            foto = '$foto',
                                                            deskripsi = '$deskripsi'
                                        WHERE id_webinar = '$id_webinar'
            ");

        echo "<script>alert('Berhasil....!!!');
            location.href='../admin/events.php';</script>";
    } else {
        echo "<script>alert('Maaf format file berkas selain JPG/PNG tidak di dukung');
            location.href='../admin/tambahwebinar.php';</script>";
    }
} else {
    echo "<script>alert('Foto terlalu besar');
            location.href='../admin/tambahwebinar.php';</script>";
}
// }
