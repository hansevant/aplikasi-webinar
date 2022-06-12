<?php include 'connection.php'; ?>
<?php
$data = array(
    "active" => "register"
);
?>
<?php include 'include/header.php'; ?>

<?php session_start();
$_SESSION['regist'] = FALSE;
?>
<!-- <form action="">
    <input type="time" name="time" id=""> <br>
    <input type="date" name="date" id="">
    <button type="submit">send</button>
</form>
<?php
// echo $_GET['time'];
// echo date('d-M-Y', strtotime($_GET['date']));
?>
<h1>Hello, world!</h1> -->
<div class="container">
    <div class="content py-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-light">
                    <h3 class="card-title ms-3 mt-3">Pendaftaran Webinar</h3>
                    <form action="functions/regist.php" method="post" class="ms-3 py-3">

                        <div class="input-group flex-nowrap mb-2">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                        </div>

                        <div class="input-group flex-nowrap mb-2">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-book"></i></span>
                            <input type="text" class="form-control" name="kelas" placeholder="Kelas" required>
                        </div>

                        <div class="input-group flex-nowrap mb-2">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-displayport"></i></span>
                            <input type="text" class="form-control" name="npm" placeholder="NPM" required>
                        </div>

                        <div class="input-group flex-nowrap mb-2">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-signpost-split"></i></span>
                            <select class="form-select" id="inputGroupSelect01" name="jurusan" required>
                                <option selected disabled value>Pilih Jurusan</option>
                                <option value="SI">Sistem Informasi</option>
                                <option value="SK">Sistem Komputer</option>
                            </select>
                        </div>

                        <div class="input-group flex-nowrap mb-2">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-building"></i></span>
                            <select class="form-select" id="inputGroupSelect01" name="domisili" required>
                                <option selected disabled value>Domisili</option>
                                <option value="Depok">Depok</option>
                                <option value="Kalimalang">Kalimalang</option>
                                <option value="Karawaci">Karawaci</option>
                                <option value="Salemba">Salemba</option>
                                <option value="Cengkareng">Cengkareng</option>
                            </select>
                        </div>

                        <div class="input-group flex-nowrap mb-2">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-at"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-group flex-nowrap mb-2">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-hash"></i></span>
                            <input type="text" class="form-control" name="nomor_wa" placeholder="Nomor Whatsapp" required>
                        </div>

                        <div class="input-group mb-2">
                            <label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-kanban"></i></label>
                            <select class="form-select" id="inputGroupSelect01" name="id_webinar" required>
                                <option selected disabled value>Pilih Webinar</option>
                                <?php
                                $queries = mysqli_query($con, "SELECT id_webinar,nama FROM events WHERE statusnya = 1");

                                while ($data = mysqli_fetch_array($queries)) {
                                ?>
                                    <option value="<?= $data['id_webinar'] ?>"><?= $data['nama'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-dark mt-2">Daftar</button>
                        <button type="reset" class="btn btn-outline-secondary mt-2">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>