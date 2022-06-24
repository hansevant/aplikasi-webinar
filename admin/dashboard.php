<?php include '../connection.php'; ?>
<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>
<?php include 'partials/navbar.php'; ?>

<?php

$all = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM events"));
$open = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM events WHERE statusnya = 1"));
$registrants = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) FROM registrants"));

?>

<div class="content">
    <div class="animated fadeIn">

        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-note"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count"><?= $all[0]; ?></span></div>
                                    <div class="stat-heading">Total Webinar</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-ticket"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count"><?= $open[0]; ?></span></div>
                                    <div class="stat-heading">Webinar dibuka</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count"><?= $registrants[0]; ?></span></div>
                                    <div class="stat-heading">Total Pendaftar</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->

        <div class="row">

            <div class="col-md-10">
                <div class="card" style="min-height: 80vh;">
                    <div class="card-header">
                        <h3>
                            <strong class="card-title">Daftar Webinar</strong>
                        </h3>
                    </div>
                    <div class="card-body">
                        <a href="tambahwebinar.php" class="btn btn-outline-primary mr-2">Tambah Webinar</a>
                        <!-- <a href="#" class="btn btn-outline-danger">Hapus Semua Webinar</a> -->
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <ol class="list-group">
                                    <?php

                                    $queries = mysqli_query($con, "SELECT * FROM events WHERE deleted_at = 0");
                                    while ($data = mysqli_fetch_array($queries)) {
                                        $status = $data['statusnya'];
                                    ?>

                                        <li class="list-group-item">
                                            <a href="../webinar.php?nama=<?= $data['id_webinar'] ?>"><?= $data['nama']; ?></a>
                                            <a href="../functions/hapuswebinar.php?nama=<?= $data['id_webinar'] ?>" onclick="return confirm('Webinar dan Data peserta akan hilang selamanya, \nApakah anda yakin?')">
                                                <span class="btn btn-sm btn-danger float-right ml-2">Hapus</span>
                                            </a>
                                            <a href="ubahwebinar.php?nama=<?= $data['id_webinar'] ?>">
                                                <span class="btn btn-sm btn-warning text-dark float-right ml-2">Ubah</span>
                                            </a>
                                            <a href="../functions/export.php?nama=<?= $data['id_webinar'] ?>" onclick="return confirm('Unduh data format excel?')">
                                                <span class="btn btn-sm btn-success float-right ml-2">Export Data</span>
                                            </a>
                                            <a href="registrants.php?nama=<?= $data['id_webinar'] ?>">
                                                <span class="btn btn-sm btn-info float-right ml-2">Data Peserta</span>
                                            </a>
                                            <div class="dropdown float-right">
                                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Status
                                                    <?php
                                                    if ($status == 1) {
                                                        echo "<span class='text-success'>Buka</span>";
                                                    } else {
                                                        echo "<span class='text-danger'>Tutup</span>";
                                                    }
                                                    ?>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="../functions/function.php?buka=<?= $data['id_webinar'] ?>">Buka</a>
                                                    <a class="dropdown-item" href="../functions/function.php?tutup=<?= $data['id_webinar'] ?>">Tutup</a>
                                                </div>
                                            </div>
                                        </li>

                                    <?php } ?>
                                </ol>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>