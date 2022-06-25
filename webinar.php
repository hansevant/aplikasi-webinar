<?php include 'connection.php'; ?>
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
    <hr>
    <h2><?= $data['nama'] ?></h2>
    <hr>
    <div class="row">
        <div class="col-md-9">
            <p class="deskripsi"><?= $data['deskripsi'] ?></p>

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

            <a href="regist.php" class="btn btn-lg btn-dark shadow-sm rounded-1">Daftar Sekarang</a>

        </div>
        <div class="col-md-3 d-none d-xl-block">
            <div class="card sticky-top rounded-0">
                <div class="card-header h5 text-center">
                    Lihat Webinar yang lain
                </div>
                <div class="card-body">

                    <?php
                    $queries = mysqli_query($con, "SELECT * FROM events WHERE statusnya = 1 ORDER BY RAND() LIMIT 3");
                    while ($data = mysqli_fetch_array($queries)) {
                        $foto = $data['foto'];
                    ?>
                        <div class="card cardz cardt" style="background:url('assets/img/events/<?= $foto  ?>'); background-position:center;background-size: cover;">
                            <!-- <div class="card-header">
                    </div> -->
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="p-2">
                                    <a href="webinar.php?nama=<?= $data['id_webinar'] ?>" style="text-decoration: none;">
                                        <h2 class="card-title text-center text-light"><?= $data['nama']; ?></h2>

                                        <!-- Selengkapnya.. -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>