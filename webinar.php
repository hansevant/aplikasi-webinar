<?php include 'functions/connection.php'; ?>
<?php
$data = array(
    "active" => "webinar"
);
?>
<?php include 'include/header.php'; ?>
<div class="container p-5">
    <?php

    $kondisi = $_GET['nama'];
    $queries = mysqli_query($con, "SELECT * FROM events WHERE id_webinar = $kondisi");
    $data = mysqli_fetch_array($queries);
    ?>

    <img src="assets/img/events/<?= $data['foto'] ?>" alt="gambar" class="banner img-fluid mx-auto d-block rounded">

    <h2 class="mt-4 border-bottom border-top"><?= $data['nama'] ?></h2>

    <p><?= $data['deskripsi'] ?></p>

    <p></p>

    <!-- <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <i class="bi bi-calendar4-week" style="font-size:6rem;"></i>
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <i class="bi bi-clock" style="font-size:6rem;"></i>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <i class="bi bi-cast" style="font-size:6rem;"></i>
            </div>
        </div>
    </div> -->

</div>
<?php include 'include/footer.php'; ?>