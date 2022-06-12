<?php
include '../connection.php';
// error_reporting(0);
$id_webinar = $_GET["nama"];

mysqli_query($con, "DELETE FROM registrants WHERE id_webinar = $id_webinar");
mysqli_query($con, "DELETE FROM events WHERE id_webinar = $id_webinar");

$cek = mysqli_affected_rows($con);

if ($cek > 0) {
    echo "<script> alert('webinar berhasil dihapus'); 
    location.href='../admin/events.php' </script>";
    exit;
} else {
    echo "<script> alert('webinar gagal dihapus'); </script>";
}
