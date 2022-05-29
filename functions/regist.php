<?php
include 'connection.php';

$nama = mysqli_real_escape_string($con, $_POST['nama']);
$kelas = mysqli_real_escape_string($con, $_POST['kelas']);
$npm = mysqli_real_escape_string($con, $_POST['npm']);
$jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);
$domisili = mysqli_real_escape_string($con, $_POST['domisili']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$nomor_wa = mysqli_real_escape_string($con, $_POST['nomor_wa']);
$id_webinar = mysqli_real_escape_string($con, $_POST['id_webinar']);

$query = mysqli_query($con, "INSERT INTO registrants (`nama`, `kelas`, `npm`, `jurusan`, `domisili`, `email` , nomor_wa, id_webinar) 
                                        VALUES ('$nama','$kelas','$npm','$jurusan','$domisili', '$email','$nomor_wa', '$id_webinar')
                                        ");

echo "<script>alert('Berhasil Mendaftar');
location.href='../registered.php';</script>";
