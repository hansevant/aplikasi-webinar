<?php include '../connection.php'; ?>
<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>
<?php include 'partials/navbar.php'; ?>

<!-- <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<?php
$id_webinar = $_GET['nama'];

$queries = mysqli_query($con, "SELECT nama FROM events WHERE id_webinar = $id_webinar");
$judul = mysqli_fetch_array($queries);
?>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card" style="min-height: 80vh;">
                    <div class="card-header">
                        <strong class="card-title">Data Peserta Webinar <?= $judul['nama']; ?></strong>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-hover table-bordered display">

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Kelas</th>
                                        <th>NPM</th>
                                        <th>Jurusan</th>
                                        <th>Domisili</th>
                                        <th>Email</th>
                                        <th>Nomor WA</th>
                                    </tr>

                                </thead>


                                <tbody>

                                    <?php

                                    $queries = mysqli_query($con, "SELECT * FROM registrants WHERE id_webinar = $id_webinar");

                                    while ($data = mysqli_fetch_array($queries)) {

                                    ?>
                                        <tr>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['kelas'] ?></td>
                                            <td><?= $data['npm'] ?></td>
                                            <td><?= $data['jurusan'] ?></td>
                                            <td><?= $data['domisili'] ?></td>
                                            <td><?= $data['email'] ?></td>
                                            <td><?= $data['nomor_wa'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<?php include 'partials/footer.php'; ?>