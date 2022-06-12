<?php include 'connection.php'; ?>
<?php
$data = array(
    "active" => "home"
);
?>
<?php include 'include/header.php'; ?>

<?php

$all = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM events"));
$open = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM events WHERE statusnya = 1"));
$registrants = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM registrants"));

?>
<main>

    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg justify-content-between">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">Webinar di lingkungan FIKTI UG</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <button type="button" class="btn btn-dark btn-lg px-4 me-md-2 fw-bold">Get Started!</button>
                    <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> -->
                </div>
            </div>
            <div class="col-md-5">
                <div class="row justify-content-center">
                    <div class="col-md-8 mt-3">
                        <div class="card card-home text-center">

                            <div class="icon">
                                <i class="bi bi-calendar2-event" style="font-size: 3.5rem; color:var(--bs-red)"></i>
                            </div>
                            <div class="text-icon">
                                <strong class="h4"><?= $open[0]; ?></strong>
                                <br>
                                Webinar yang tersedia
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 my-3">
                        <div class="card card-home text-center">
                            <div class="icon">
                                <i class="bi bi-people" style="font-size: 3.5rem; color:var(--bs-purple)"></i>
                            </div>
                            <div class="text-icon">
                                <strong class="h4"><?= $registrants[0]; ?> </strong>
                                <br>
                                Jumlah Pendaftar
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <div class="card card-home text-center">
                            <div class="icon">
                                <i class="bi bi-folder-check" style="font-size: 3.5rem; color:var(--bs-yellow)"></i>
                            </div>
                            <div class="text-icon">
                                <strong class="h4"><?= $all[0]; ?> </strong>
                                <br>
                                Webinar yang terlaksana
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php include 'include/footer.php'; ?>