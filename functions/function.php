<?php

include "../connection.php";

if (isset($_GET["buka"])) {

    $id_webinar = ($_GET["buka"]);
    $queries = mysqli_query($con, "UPDATE events SET statusnya = 1 WHERE id_webinar = $id_webinar");

    $cek = mysqli_affected_rows($con);

    if ($cek > 0) {
        echo "<script> alert('webinar berhasil dibuka'); 
    location.href='../admin/events.php' </script>";
        exit;
    } else {
        echo "<script> alert('webinar gagal dibuka'); </script>";
    }
}

if (isset($_GET["tutup"])) {

    $id_webinar = ($_GET["tutup"]);
    $queries = mysqli_query($con, "UPDATE events SET statusnya = 0 WHERE id_webinar = $id_webinar");

    $cek = mysqli_affected_rows($con);

    if ($cek > 0) {
        echo "<script> alert('webinar berhasil ditutup'); 
    location.href='../admin/events.php' </script>";
        exit;
    } else {
        echo "<script> alert('webinar gagal ditutup'); </script>";
    }
}
