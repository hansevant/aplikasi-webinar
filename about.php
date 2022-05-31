<?php include 'functions/connection.php'; ?>
<?php
$data = array(
    "active" => "about"
);
?>
<?php include 'include/header.php'; ?>

<?php

$events = mysqli_query($con, "SELECT COUNT(*) FROM events");
$registrants = mysqli_query($con, "SELECT COUNT(*) FROM registrants");

?>

<div class="container p-5">
    <!-- <p class="title">Halaman About</p> -->

    <div class="row justify-content-center">
        <div class="col-md-4 mt-3">
            <div class="card text-center">
                <div class="card-header">
                    Webinar
                </div>
                <i class="bi bi-back" style="font-size: 4rem;"></i>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card text-center">
                <div class="card-header">
                    Pendaftar
                </div>
                <i class="bi bi-back" style="font-size: 4rem;"></i>
            </div>
        </div>
        <div class="col-md-5 mt-md-5 mt-3">
            <div class="card text-center">
                <div class="card-header">
                    Biaya Pendaftaran
                </div>
                <i class="bi bi-back" style="font-size: 4rem;"></i>
            </div>
        </div>
    </div>

</div>
<?php include 'include/footer.php'; ?>