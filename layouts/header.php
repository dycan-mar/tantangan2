<?php
$baseurl = "http://localhost/TubanWeb/";
// var_dump($_SERVER);
$uri = explode('/', $_SERVER['REQUEST_URI']);
$page = $uri[2];
function active($locate)
{
    global $page;
    $status = '';
    if ($page == $locate) {
        return $status = 'active';
    }
    return $status;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />



    <title>TubanWeb</title>
</head>
<!-- animation -->
<style>
    /* Efek animasi awal */
    .hidden {
        opacity: 0;
        transition: all 0.8s ease-out !important;
    }

    .delay-1 {
        transition: transform 1s ease-in-out !important;
    }

    .delay-2 {
        transition: transform 1.3s ease-in-out !important;
    }

    .delay-3 {
        transition: transform 1.6s ease-in-out !important;
    }

    .delay-4 {
        transition: transform 1.7s ease-in-out !important;
    }

    .delay-5 {
        transition: transform 2s ease-in-out !important;
    }

    .delay-6 {
        transition: transform 2.3s ease-in-out !important;
    }

    /* Efek masuk dari kiri */
    .from-left {
        transform: translateX(-100px);
    }

    /* Efek masuk dari kanan */
    .from-right {
        transform: translateX(100px);
    }

    /* Efek masuk dari kanan */
    .from-bottom {
        transform: translateY(300px);
    }

    /* Efek membesar */
    .scale-up {
        transform: scale(0.5);
    }


    /* Ketika elemen masuk viewport, ubah efek */
    .show {
        opacity: 1;
        transform: translateX(0) scale(1);
    }
</style>
<!-- component -->
<style>
    nav {
        z-index: 10000 !important;
    }

    .bg-primary {
        background-color: #2124B1 !important;
    }

    .text-primary {
        color: #2124B1 !important;
    }

    .btn-sosmed {
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: normal;
        border-radius: 50px;
        text-decoration: none;
        text-align: center;
        font-size: 1.4rem;
        font-weight: bold;
        background-color: #ffffff;
        color: #2124B1;
        border: solid 1px #2124B1;
        width: 38px;
        height: 38px;
    }

    .btn-sosmed:hover {
        transition: background-color 0.4s ease-in-out, color 0.4s ease-in-out;
        background-color: #2124B1;
        color: #ffffff;
    }

    .btn-sosmed:hover svg {
        fill: #ffffff;
        transition: fill 0.4s ease-in-out;
    }

    .btn-foot {
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: normal;
        border-radius: 100%;
        text-decoration: none;
        text-align: center;
        font-size: 1.4rem;
        font-weight: bold;
        color: #ffffff;
        background-color: #2124B1;
        border: solid 0.1px #ffffff;
        width: 38px;
        height: 38px;
    }

    .btn-foot:hover {
        transition: background-color 0.4s ease-in-out, color 0.4s ease-in-out;
        color: #2124B1;
        background-color: #ffffff;
    }

    .btn-foot:hover svg {
        fill: #2124B1;
        transition: fill 0.4s ease-in-out;
    }

    .foot {
        padding: 25px 0;
        font-size: 14px;
        border-top: 1px solid rgba(256, 256, 256, .1);
    }

    .menu-foot a {
        text-decoration: none;
        padding: 0 1rem;
        color: #ffffff;
    }

    .scroll {
        background-color: #ffffff;
        color: #ffc107;
    }

    .nav-link {
        position: relative;
        padding-bottom: 5px;
        transition: color 0.3s ease-in-out;
    }

    .nav-link:hover {
        color: #ffc107 !important;
    }

    /* Garis bawah saat aktif atau hover */
    .nav-link::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -25px;
        /* Jarak garis dari teks */
        width: 0;
        height: 2.5px;
        color: #ffc107;
        background-color: #ffc107;
        transition: all 0.5s ease-in-out;
        transform: translateX(-50%);
    }

    .nav-link:hover::after,
    .nav-link.active::after {

        width: 100%;
    }

    .nav-link.active {
        color: #ffc107 !important;
    }

    .btn-wa {
        background-color: #2124B1;
        transition: transform 0.4s ease-in-out;
    }

    .btn-wa:hover {
        z-index: 1;
        transform: scale(1.2);
    }

    .nav-pop {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        text-decoration: none;
    }

    .nav-pop span {
        display: inline-block;
        transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        transform-origin: left;
    }

    .nav-pop:hover span {
        transform: scaleX(1.2);
        opacity: 0.9;
    }

    /* media */
    @media (max-width:991px) {
        nav {
            background-color: #ffffff !important;
        }

        .nav-link::after {
            display: none;
        }
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light justify-content-between position-fixed  p-0 w-100" id="navbar">
        <div class="container-fluid d-flex justify-content-between p-0" style="width: 100%;">
            <div class="navbar-brand p-0 m-3">
                <a class="navbar-brand" href="#">
                    <img id="logo" src="<?= $baseurl ?>assets/img/logo-light.png" alt="" width="100" height="55">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-0" id="navbarNav">
                <ul class="navbar-nav ms-auto  pt-0 pb-0 " id="">
                    <li class="nav-item ">
                        <a class=" nav-link m-3 fs-6 text-light <?= active('beranda') ?> " aria-current="page"
                            id="navbar-nav-a" href="<?= $baseurl ?>beranda/index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-3 fs-6 text-light"
                            href="<?= $baseurl ?>beranda/index.php#jasaDanPelayanan">Layanan & Jasa</a>
                    </li>
                    <li class="">
                        <a class="nav-link  m-3 fs-6 text-light <?= active('portofolio') ?>"
                            href="<?= $baseurl ?>portofolio/index.php">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link m-3 fs-6 text-light <?= active('carapesan') ?>"
                            href="<?= $baseurl ?>carapesan/index.php">Cara
                            Pesan</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link m-3 fs-6 text-light <?= active('karir') ?>"
                            href="<?= $baseurl ?>karir/index.php">Karir</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link m-3 fs-6 text-light <?= active('kontak') ?>"
                            href="<?= $baseurl ?>kontak/index.php">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary rounded-pill m-3 ms-auto "
                            style="background-color: #4777F5 !important;border-color: #4777F5 !important;" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-whatsapp mb-1" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            Konsultasi
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 
    <nav
        class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-transparent position-fixed justify-content-between  p-0 w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" alt="Bootstrap" width="100" height="55">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse px-0" id="navbarNav">
                <ul class="navbar-nav ms-auto  pt-0 pb-0 " id="navbar-nav">
                    <li class="nav-item p-0">
                        <a class=" nav-link m-3 fs-6" aria-current="page" id="navbar-nav-a" href="">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-3 fs-6" href="">Layanan & Jasa</a>
                    </li>
                    <li class="">
                        <a class="nav-link  m-3 fs-6" href="">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link m-3 fs-6" href="">Cara
                            Pesan</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link m-3 fs-6" href="">Karir</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link m-3 fs-6" href="">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary rounded-pill m-3 ms-auto "
                            style="background-color: #4777F5 !important;border-color: #4777F5 !important;" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-whatsapp mb-1" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            Konsultasi
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->