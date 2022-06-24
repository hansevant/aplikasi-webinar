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
                <h1 class="display-4 fw-bold lh-1 judul mb-3">Pendaftaran Webinar Di Lingkungan FIKTI UG</h1>
                <p class="lead mb-3">BEM FIKTI UG mempersembahkan macam-macam webinar dari program kerja tiap departemen atau biro kami yang akan memberikan ilmu dan wawasan yang bermanfaat kepada para peserta webinar. Webinar ini hanya untuk mahasiswa di lingkungan Fakultas Ilmu Komputer dan Teknologi Informasi dan <b>tidak dipungut biaya</b> untuk mendaftar semua acara yang tersedia disini.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <a href="webinars.php" class="btn btn-dark btn-lg px-4 me-md-2 fw-bold" data-aos="fade-up" data-aos-duration="500">Lihat Webinar</a>
                    <a href="regist.php" class="btn btn-outline-dark btn-lg px-4 me-md-2 fw-bold" data-aos="fade-up" data-aos-duration="500">Daftar Sekarang !</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row justify-content-center">
                    <div class="col-md-11 mt-3">
                        <div class="card card-home text-center" data-aos="fade-right" data-aos-duration="1000">

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
                    <div class="col-md-11 my-3">
                        <div class="card card-home text-center" data-aos="fade-left" data-aos-duration="2000">
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
                    <div class="col-md-11 mb-5">
                        <div class="card card-home text-center" data-aos="fade-right" data-aos-duration="3000">
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