<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/logo.png">
    <link rel="shortcut icon" href="assets/img/logo.png">

    <title>Webinar FIKTI UG</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <header class="p-2 bg-dark text-white">
        <div class="container">
            <div class="flex-wrap p-1 align-items-center justify-content-center">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./" class="nav-link px-3 text-white <?= $data['active'] === 'home' ? 'fw-bold' : 'fw-none'; ?>">Beranda</a></li>
                    <li><a href="webinars.php" class="nav-link px-3 text-white <?= $data['active'] === 'webinar' ? 'fw-bold' : 'fw-none'; ?>">Webinar</a></li>
                    <li><a href="regist.php" class="nav-link px-3 text-white <?= $data['active'] === 'register' ? 'fw-bold' : 'fw-none'; ?>">Pendaftaran</a></li>
                </ul>
            </div>
        </div>
    </header>