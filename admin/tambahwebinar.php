<?php include '../functions/connection.php'; ?>
<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>
<?php include 'partials/navbar.php'; ?>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card" style="min-height: 80vh;">
                    <div class="card-header">
                        <h3>
                            <strong class="card-title">Tambah Webinar</strong>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="../functions/tambahwebinar.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Webinar :</label>
                                        <input type="text" class="form-control" id="nama" name="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal :</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                                    </div>
                                    <div class="mb-3">
                                        <label for="waktu" class="form-label">Waktu :</label>
                                        <input type="time" class="form-control" id="waktu" name="waktu">
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto" class="form-label">Gambar/Banner (1200x300) :</label>
                                        <input type="file" class="form-control-file" id="foto" name="foto">
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi :</label>
                                        <input id="deskripsi" type="hidden" name="deskripsi">
                                        <trix-editor input="deskripsi"></trix-editor>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg" name="submit">Submit</button>
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