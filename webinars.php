<?php include 'connection.php'; ?>
<?php
$data = array(
    "active" => "webinar"
);
?>
<?php include 'include/header.php'; ?>

<?php

$queries = mysqli_query($con, "SELECT * FROM events WHERE statusnya = 1");

?>

<div class="container">
    <div class="row p-4 justify-content-center">
        <?php
        while ($data = mysqli_fetch_array($queries)) {
            $foto = $data['foto'];
        ?>
            <div class="col-md-4 mb-3">
                <div class="card cardz" style="background:url('assets/img/events/<?= $foto  ?>'); background-position:center;background-size: cover;">

                    <div class="overlay">
                        <div class="p-2">
                            <a href="webinar.php?nama=<?= $data['id_webinar'] ?>" style="text-decoration: none;">
                                <h2 class="card-title text-center text-light mt-5"><?= $data['nama']; ?></h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include 'include/footer.php'; ?>