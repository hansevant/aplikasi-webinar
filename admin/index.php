<?php include '../functions/connection.php'; ?>
<?php
error_reporting(0);
session_start();
if ($_SESSION['login']) {
    echo "<script>
    location.href = './dashboard.php';
  </script>";
}

?>
<!doctype html>
<html lang="en">

<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin') {
        // echo 'login sukses';
        $_SESSION['login'] = $username;
        $nama = $_SESSION['login'];
        echo "<script>alert('Selamat datang $nama');
        location.href = './dashboard.php';
      </script>";
    } else {
        echo 'jangan ngehack woi';
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webinar FIKTI UG</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <main class="w-100 m-auto p-5" style="max-width:450px;">
        <form action="" method="POST">
            <div class="logo" style="text-align: center;">
                <i class="bi bi-segmented-nav" style="font-size: 5rem;"></i>
            </div>
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>

            <div class="form-floating mb-1">
                <input type="text" class="form-control" name="username" id="floatingInput" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-dark" name="login" type="submit">Login</button>
        </form> <br>
        <span class="mb-2 mb-md-0 text-muted">© 2022 Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Gunadarma</span>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>