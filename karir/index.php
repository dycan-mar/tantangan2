<?php include "../layouts/header.php" ?>
<!-- <link rel="stylesheet" href="../assets/css/karir.css"> -->

<style>
    * {
        padding: 0;
        margin: 0;

    }

    .atas {
        width: 100%;
        height: 100vh;
        background-color: #2124B1 !important;
        background: url("<?= $baseurl ?>assets/img/bg-dot.png"),
            url("<?= $baseurl ?>assets/img/bg-dot.png"),
            url("<?= $baseurl ?>assets/img/bg-round.png"),
            url("<?= $baseurl ?>assets/img/bg-tree.png"),
            url("<?= $baseurl ?>assets/img/bg-bottom.png");
        background-size: auto, auto, auto, auto, 100%;
        background-position: 10px 10px,
            bottom 190px right 10px,
            left 55% top -1px,
            left 45% bottom -1px,
            center bottom -2px;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
    }

    .atas .text {
        display: block;
        color: white;

    }

    .atas .text .locate {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .atas .text .locate a {
        color: white;
    }

    .section {
        display: flex;
        justify-content: center;
    }

    .section h6 {
        color: blue;
    }

    .section .info .miring {
        font-style: italic;
        color: grey;
        margin-left: 5px;
        font-size: small;
    }

    .section .info p {
        color: grey;
        margin: 20px;
        margin-left: 5px;
    }

    .section .info h3 {
        background-color: #FFC107;
        margin: 5px;
        border-radius: 30px;
        justify-content: center;
        padding: 10px;
    }

    .located {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .located a {
        text-decoration: none;
        color: #ffff;
    }

    .located i {
        gap: 1rem;
        padding: 0 1rem;
    }

    ul {
        list-style: none;
        margin-left: 20px;
        margin: 5px;
        color: grey;
    }

    .label-3 {
        font-family: 'calibry';
        background-color: #4043bc;
        border-radius: 30px;
        justify-content: center;
        padding: 10px;
        margin: 10px;
        color: white;
    }

    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;

    }

    .card {
        border-radius: 50px !important;
    }

    .pp {
        background-image: url("../img/BG.png");
        position: relative;
    }

    /* news */
    .news {
        background-image: url("../assets/img/bg2.png");
        background-repeat: no-repeat;
        background-size: cover;

        height: 300px;
    }

    /* end news */

    @media (max-width:991px) {
        .atas {
            height: 50vh;
        }
    }
</style>

<!-- section atas -->
<section class="atas">
    <div class="text text-center">
        <h1 class="hidden scale-up">
            Lowongan Pekerjaan
        </h1>
        <div class="located text-center">
            <a href="../beranda/index.php">Beranda<i>/</i></a>
            <a href=""> Halaman<i>/</i></a>
            <a href="">Karir</a>
        </div>
    </div>
</section>
<!-- section atas end -->

<!-- section ke 2 -->
<section class="section py-5 px-3 px-md-5 row">
    <div class="hidden from-bottom col-lg-7">
        <h6><b>Lowongan Kerja</b></h6>
        <h1 class="">Magang Web Programmer dan Wordpress Developer</h1>
        <label class="rounded-pill text-center btn-success px-2">Lowongan dibuka</label>
        <div class="info col-sm-12">
            <p class="miring">01 Januari 2024 - 07 Januari 2024</p>
            <p>Bagi kamu yang ingin belajar atau memperdalam kemampuan dibidang IT khususnya di bidang programming
                dan
                wordress, silahkan untuk bergabung bersama kami dengan mengirimkan lamaran ke email
                karir@tubanweb.com
            </p>
            <h3 class="fs-5">kualifikasi web programmer:</h3>
            <p> <span>✔️</span> Memahami PHP</p>
            <p><span>✔️</span> Memahami HTML, CSS dan Javascript</p>
            <p><span>✔️</span> Familiar dengan Bootstrap</p>
            <h3 class="fs-5 mt-3">kualifikasi Wordpress Developer:</h3>
            <p> <span>✔️</span> Familiar dengan CMS Wordpress</p>
            <p><span>✔️</span> Pernah menggunakan Page Builder (Elementor / Sejenisnya)</p>
            <h3 class="fs-5 mt-3">kualifikasi Umum</h3>
            <p> <span>✔️</span> Fulltime (Onsite)</p>
            <p><span>✔️</span> Disiplin waktu</p>
            <p><span>✔️</span> Maksimal usia 25 tahun</p>
            <p><span>✔️</span> Jam magang, Senin - Sabtu (08:00 - 16:00)</p>

            <a class="btn btn-primary text-white rounded-pill px-4 me-2">kirim laporan</a>

        </div>
    </div>
    <div class="hidden scale-up col-lg-5 text-center">
        <div class="p-lg-5 pt-lg-2">
            <img src="../assets/img/magang_2024_1.jpg" class="my-sm-5 my-lg-0 img-fluid"
                style="border-radius: 30px !important;" alt="">
        </div>
    </div>
</section>
<!-- section ke 2 end -->

<!-- section ke 3 -->
<section class="section py-5 px-3 px-md-5 row">
    <div class="hidden from-bottom col-lg-7">
        <h6><b>Lowongan Kerja</b></h6>
        <h1 class="">Customer Service</h1>
        <label class="bg-danger text-white rounded-pill text-center px-2">Lowongan sudah Tutup</label>
        <div class="info">
            <p class="miring">29 November 2023 s/d 15 November 2023</p>
            <p>Bagi anda yang mempunyai keahlian di bidang komunikasi dan sedikit keahlian Teknik Informatika, silahkan
                untuk bergabung bersama kami dengan mengirimkan lamaran ke email karir@tubanweb.com
            </p>
            <h3 class="fs-5 mt-3">Kualifikasi calon pelamar:</h3>
            <p> <span>✔️</span> Wanita, usia maksimal 30 tahun</p>
            <p><span>✔️</span> Mampu berkomunikasi dengan baik dan sabar</p>
            <p><span>✔️</span> Mampu mengoperasikan Ms. Office</p>
            <p><span>✔️</span> Mampu membuat flowchart sederhana</p>

            <a class="btn btn-primary text-white rounded-pill px-4 me-2">kirim laporan</a>

        </div>
    </div>
    <div class="hidden scale-up col-lg-5 text-center">
        <div class="p-lg-5 pt-lg-2">
            <img src="../assets/img/customer-service.jpeg" class="mt-sm-5 mt-lg-0 img-fluid"
                style="border-radius: 30px !important;" alt="">
        </div>
    </div>
</section>
<!-- section ke 3 end -->

<!-- section ke 4 -->
<section class="section py-5 px-3 px-md-5 row">
    <div class="hidden from-bottom col-lg-7">
        <h6><b>Lowongan Kerja</b></h6>
        <h1>Junior Web Programmer</h1>
        <label class="bg-danger rounded-pill text-white mb-3 px-2">Lowongan Sudah Tutup</label>
        <div class="info">
            <p class="miring">04 Oktober 2023 s/d 15 Oktober 2023</p>
            <p>Yang suka koding bisa bergabung bersama kami sebagai web programmer dan tingkatkan kemampuan anda
            </p>
            <h3 class="fs-5 mt-3">Kualifikasi calon pelamar:</h3>
            <p> <span>✔️</span> Menguasai PHP (Codeigniter)</p>
            <p><span>✔️</span> Memahami HTML, CSS, Javascript</p>
            <p><span>✔️</span> Familiar dengan Bootstrap</p>
            <p> <span>✔️</span> Full time (onsite)</p>
            <p><span>✔️</span> Jam kerja, Senin - Sabtu (08:00 - 16:00)</p>
            <p> <span>✔️</span> Mampu bekerja dengan deadline</p>
            <p><span>✔️</span> Disiplin waktu</p>
            <p><span>✔️</span> Maksimal usia 29 tahun</p>

            <a class="btn btn-primary text-white rounded-pill px-4 me-2">kirim lamaran</a>

        </div>
    </div>
    <div class="hidden scale-up col-lg-5 text-center">
        <div class="p-lg-5 pt-lg-2">
            <img src="../assets/img/junior-programmer.jpeg" class="mt-sm-5 mt-lg-0 img-fluid"
                style="border-radius: 30px !important;" alt="">
        </div>
    </div>
</section>
<!-- section ke 4 end -->

<!-- card  -->
<div class="container col-lg-12">
    <div class="hidden from-bottom section-title position-relative ms-4 mb-4 pb-2">
        <h6 class="position-realtive text-primary ps-3"><b>Lowongan Kerja</b></h6>
        <h1 class="mt-2 ps-3">Lowongan lain</h1>
        <p class="text-secondary ps-3 mb-4">Lihat lowongan lebih banyak lagi.</p>
        <div class="container row g-4">
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="hidden from-bottom card position-relative ">
                    <p class="p-0 m-0 position-absolute">
                        <span class="bg-danger text-white p-1 px-3 rounded-pill">lowongan ditutup</span>
                    </p>
                    <img src="../assets/img/magang-3-bidang.jpeg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Magang UI/UX, Front-End, Back-End</h5>
                        <p class="card-text text-secondary">Program magang untuk kerja dari TubanWeb</p>
                    </div>
                    <div class="card-body text-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#ops"
                            class="card-link btn btn-primary btn-sm rounded-pill ms-1 text-white fw-bold">selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg> </button>
                        <p class="text-secondary card-footer text-muted">01 Mei 2023 s/d 10 Mei 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="hidden from-bottom card position-relative ">
                    <p class="p-0 m-0 position-absolute">
                        <span class="bg-danger text-white p-1 px-3 rounded-pill">lowongan ditutup</span>
                    </p>
                    <img src="../assets/img/magang-programmer.jpeg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Magang Programmer</h5>
                        <p class="card-text text-secondary">Program magang untuk kerja dari TubanWeb</p>
                    </div>
                    <div class="card-body text-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#ops"
                            class="card-link btn btn-primary btn-sm rounded-pill ms-1 text-white fw-bold">selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg> </button>
                        <p class="text-secondary card-footer text-muted">24 Juli 2023 s/d 04 Agustus 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="hidden from-bottom card position-relative ">
                    <p class="p-0 m-0 position-absolute">
                        <span class="bg-danger text-white p-1 px-3 rounded-pill">lowongan ditutup</span>
                    </p>
                    <img src="../assets/img/web-programmer.jpeg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Web Programmer</h5>
                        <p class="card-text text-secondary">Lowongan untuk mengisi posisi programmer khususnya web</p>
                    </div>
                    <div class="card-body text-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#ops"
                            class="card-link btn btn-primary btn-sm rounded-pill ms-1 text-white fw-bold">selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg> </button>
                        <p class="text-secondary card-footer text-muted">24 Juli 2023 s/d 04 Agustus 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class=" hidden from-bottom card position-relative ">
                    <p class="p-0 m-0 position-absolute">
                        <span class="bg-danger text-white p-1 px-3 rounded-pill">lowongan ditutup</span>
                    </p>
                    <img src="../assets/img/web-programmer.jpeg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Web Programmer</h5>
                        <p class="card-text text-secondary">Lowongan untuk mengisi posisi programmer khususnya web</p>
                    </div>
                    <div class="card-body text-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#ops"
                            class="card-link btn btn-primary btn-sm rounded-pill ms-1 text-white fw-bold">selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg> </button>
                        <p class="text-secondary card-footer text-muted">01 Jan 2023 s/d 26 Jan 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- card end -->



<!-- news -->
<section class="hidden from-bottom news pt-4 mt-5 " id="news">
    <div class="container  d-flex justify-align-end">
        <div class="row">
            <div class=" col-md-6  mb-sm-3">
                <h2 class="text-light fs-2 fw-bold">Ingin mendapatkan informasi terbaru dari TubanWeb?</h2>
                <small class="text-light">Masukan nomor whatsapp anda dan tekan tombol kirim untuk mendapatkan update
                    informasi terbaru dari kami.</small>
                <div class="position-relative w-100 mt-3">
                    <input class="form-control" style="border-radius: 2rem;" type="text"
                        placeholder="Masukan nomor whatsapp di sini">
                    <button class="btn shadow-none position-absolute top-0 end-0 ">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="22" height="22" fill="#2124B1"
                            class="bi bi-send-fill" viewBox="0 0 16 16">
                            <path
                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="col-md-6 text-center mb-5 d-none d-md-block  ">
                <img class="img-fluid mt-5 text-center" style="height: 250px;" src="../assets/img/newsletter.png"
                    alt="">
            </div>
        </div>
    </div>
</section>
<!-- news end -->

<!-- project unggulan -->
<div class="container-xxl py-5 mt-5">
    <div class="container px-lg-5">
        <div class="hidden from-bottom section-title position-relative text-center mb-5 pb-2">
            <h6 class="position-relative d-inline text-primary ps-4">Projek Unggulan</h6>
            <h2 class="mt-2">Temukan Lebih Banyak Projek Di Menu Portofolio</h2>
        </div>
        <div class="hidden from-bottom row g-4">
            <div class="col-lg-3">
                <div class="card position-relative">
                    <p class="p-0 m-0 position-absolute">
                        <span class="bg-warning text-white p-1 px-3 rounded-pill">HIPPAM titomor becok</span>
                    </p>
                    <img src="../assets/img/hippam-tirtomoro-becok.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Tagihan Air Bersih</h5>
                        <p class="card-text text-secondary">Aplikasi manajemen tagihan air bersih, kelola pembayaran,
                            utang piutang,
                            laporan pemakaian air dll.</p>
                    </div>
                    <div class="card-body d-flex justify-content-end text-end">
                        <a target="_blank"
                            href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2ATagihan+Air+Bersih+-+HIPPAM+Tirto+Moro+Becok%2A.+Terimakasih.&type=phone_number&app_absent=0"
                            class="btn btn-sm btn-success rounded-pill justify-content-center">
                            <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            <span class="d-sm-inline d-md-none ps-1">Tanyakan</span>
                        </a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#ops"
                            class="card-link btn btn-primary btn-sm rounded-pill ms-1 text-white fw-bold">selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg> </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card position-relative">
                    <p class="p-0 m-0 position-absolute">
                        <span class="bg-warning text-white p-1 px-3 rounded-pill">Tubanesia</span>
                    </p>
                    <img src="../assets/img/tubanesia.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Order Management</h5>
                        <p class="card-text text-secondary">Aplikasi manajemen pesanan, stok kain, proses produksi dan
                            laporan harian.</p>
                    </div>
                    <div class="card-body d-flex justify-content-end text-end">
                        <a target="_blank"
                            href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2ATagihan+Air+Bersih+-+HIPPAM+Tirto+Moro+Becok%2A.+Terimakasih.&type=phone_number&app_absent=0"
                            class="btn btn-sm btn-success rounded-pill justify-content-center">
                            <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            <span class="d-sm-inline d-md-none ps-1">Tanyakan</span>
                        </a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#ops"
                            class="card-link btn btn-primary btn-sm rounded-pill ms-1 text-white fw-bold">selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg> </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card position-relative">
                    <p class="p-0 m-0 position-absolute">
                        <span class="bg-warning text-white p-1 px-3 rounded-pill">PT Shell Indonesia</span>
                    </p>
                    <img src="../assets/img/shell.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Warehouse Management</h5>
                        <p class="card-text text-secondary">Aplikasi manajemen stok sparepart dan laporan pekerjaan di
                            lapangan.</p>
                    </div>
                    <div class="card-body d-flex justify-content-end text-end">
                        <a target="_blank"
                            href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2ATagihan+Air+Bersih+-+HIPPAM+Tirto+Moro+Becok%2A.+Terimakasih.&type=phone_number&app_absent=0"
                            class="btn btn-sm btn-success rounded-pill justify-content-center">
                            <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            <span class="d-sm-inline d-md-none ps-1">Tanyakan</span>
                        </a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#ops"
                            class="card-link btn btn-primary btn-sm rounded-pill ms-1 text-white fw-bold">selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg> </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card position-relative">
                    <p class="p-0 m-0 position-absolute">
                        <span class="bg-warning text-white p-1 px-3 rounded-pill">Tuban Perspektif</span>
                    </p>
                    <img src="../assets/img/tubanperspektif.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Website Company Profile</h5>
                        <p class="card-text text-secondary">Menampilkan informasi perusahaan dan portofolio agar dapat
                            menjangkau lebih banyak...</p>
                    </div>
                    <div class="card-body d-flex justify-content-end text-end">
                        <a target="_blank"
                            href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2ATagihan+Air+Bersih+-+HIPPAM+Tirto+Moro+Becok%2A.+Terimakasih.&type=phone_number&app_absent=0"
                            class="btn btn-sm btn-success rounded-pill justify-content-center">
                            <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            <span class="d-sm-inline d-md-none ps-1">Tanyakan</span>
                        </a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#ops"
                            class="card-link btn btn-primary btn-sm rounded-pill ms-1 text-white fw-bold">selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- card-2 end -->

<?php include "../layouts/footer.php"; ?>