<?php include 'connection.php'; ?>
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
            <div class="col-md-5">
                <div class="card card-light text-center p-3">
                    <h3 class="card-title ms-3 mt-3">Terimakasih sudah mendaftar</h3>

                    <p>Mohon ditunggu anda akan diinvite kedalam grup webinar tersebut untuk mengetahui info lebih lanjut.. silahkan hubungi CP yang tersedia bila anda tidak ada diinvite kedalam grup tersebut.</p>

                    <a href="./" class="btn btn-dark">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>