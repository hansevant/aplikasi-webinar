<?php include '../connection.php'; ?>
<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>
<?php include 'partials/navbar.php'; ?>

<?php $id_webinar = $_GET["nama"];

$queries = mysqli_query($con, "SELECT * FROM events WHERE id_webinar = $id_webinar");
$data = mysqli_fetch_array($queries);
$payment = $data['foto'];
$array = explode("_", $payment);
$nomor_acak = $array[0];
$nama_file = $array[1];
$desc = htmlspecialchars($data['deskripsi'])
?>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card" style="min-height: 80vh;">
                    <div class="card-header">
                        <h3>
                            <strong class="card-title">Ubah Webinar</strong>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="../functions/ubahwebinar.php" method="POST" enctype="multipart/form-data">

                                    <input type="hidden" name="id_webinar" value="<?= $data['id_webinar'] ?>">
                                    <input type="hidden" name="foto_lama" value="<?= $data['foto'] ?>">

                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Webinar :</label>
                                        <input type="text" class="form-control" value="<?= $data['nama'] ?>" id="nama" name="nama">
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal :</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                                    </div>
                                    <div class="mb-3">
                                        <label for="waktu" class="form-label">Waktu :</label>
                                        <input type="time" class="form-control" id="waktu" name="waktu">
                                    </div> -->
                                    <div class="mb-3">
                                        <label for="foto" class="form-label">Gambar/Banner (1200x300) : <?= $nama_file ?></label> <br>
                                        <img src="../assets/img/events/<?= $data['foto'] ?>" height="300"> <br> <br>
                                        <input type="file" class="form-control-file" id="foto" name="foto">
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi :</label>
                                        <input id="deskripsi" type="hidden" name="deskripsi" value="<?= $desc ?>">
                                        <trix-editor input="deskripsi"></trix-editor>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary btn-lg">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>