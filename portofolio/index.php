<?php include "../layouts/header.php" ?>
<style>
    * {
        padding: 0;
        margin: 0;

    }

    #hero {
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
    }

    .located {
        display: flex;
    }

    .located a {
        text-decoration: none;
        color: #ffff;
    }

    .located i {
        gap: 1rem;
        padding: 0 1rem;
    }

    .card {
        border-radius: 10px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .card:hover {
        background-color: #FFC107;
        /* color: white; */
    }

    .card:hover .card-text {
        color: white;
    }

    .card-title {
        color: black !important;
    }

    @media (max-width:991px) {
        #hero {
            height: 50vh;
        }
    }
</style>
<section id="hero" class="d-flex justify-content-center align-items-center text-light">
    <div class="d-block text-center">
        <h1 class="hidden scale-up fw-bold">Portofolio</h1>
        <div class="located d-flex mt-3">
            <a href="../beranda/index.php">Beranda<i>/</i></a>
            <a href=""> Halaman<i>/</i></a>
            <a href="">Cara pesan</a>
        </div>
    </div>
</section>
<!-- section atas end -->

<!-- card 1 -->
<div class="container-xxl py-5">
    <div class="row ">
        <div class="hidden from-bottom p-4 px-md-5 col-lg-8 ">
            <div class="section-title  mb-4 pb-2">
                <h6 class="text-primary  "><b>Portofolio</b></b></h6>
                <h2 class="mt-2 fw-bold">Berbagai macam proyek yang sudah dijalankan di berbagai perusahaan</h2>
            </div>
            <p class="mb-4 text-secondary">
                Berbagai proyek aplikasi dan website berhasil kita luncurkan di berbagai perusahaan. Silahkan
                tekan tombol "Tanyakan" jika anda ingin mengetahui informasi dari customer service terkait
                dengan aplikasi tersebut. Silahkan tekan "Selengkapnya" untuk mednapatkan informasi langsung
                dari website ini.
            </p>
        </div>
        <div class="hidden scale-up col-lg-4 text-center ">
            <img class="img-fluid mt-sm-5 mt-lg-0" src="../assets/img/about.jpg" style="width: 385px;" alt="">
        </div>

    </div>
</div>
<!-- 2 end -->

<!-- card baris 1 -->
<div class="container-xxl py-5 mt-5">
    <div class="container px-lg-5">
        <div class="row g-4">
            <div class="hidden from-bottom col-12 row">
                <div class=" col-lg-3">
                    <div class="card position-relative">
                        <p class="p-0 m-0 position-absolute">
                            <span class="bg-warning text-white p-1 px-3 rounded-pill">HIPPAM titomor becok</span>
                        </p>
                        <img src="../assets/img/hippam-tirtomoro-becok.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Tagihan Air Bersih</h5>
                            <p class="card-text text-secondary">Aplikasi manajemen tagihan air bersih, kelola
                                pembayaran,
                                utang piutang,
                                laporan pemakaian air dll.</p>
                        </div>
                        <div class="card-body d-flex justify-content-end text-end">
                            <a class="btn btn-sm btn-success rounded-pill justify-content-center" target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2ATagihan+Air+Bersih+-+HIPPAM+Tirto+Moro+Becok%2A.+Terimakasih.&type=phone_number&app_absent=0">
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
                            <p class="card-text text-secondary">Aplikasi manajemen pesanan, stok kain, proses produksi
                                dan
                                laporan harian.</p>
                        </div>
                        <div class="card-body d-flex justify-content-end text-end">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2AOrder+Management+-+Tubanesia%2A.+Terimakasih.&type=phone_number&app_absent=0"
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
                            <p class="card-text text-secondary">Aplikasi manajemen stok sparepart dan laporan pekerjaan
                                di
                                lapangan.</p>
                        </div>
                        <div class="card-body d-flex justify-content-end text-end">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2AWarehouse+Management+-+PT+Shell+Indonesia%2A.+Terimakasih.&type=phone_number&app_absent=0"
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
                            <p class="card-text text-secondary">Menampilkan informasi perusahaan dan portofolio agar
                                dapat
                                menjangkau lebih banyak...</p>
                        </div>
                        <div class="card-body d-flex justify-content-end text-end">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2AWebsite+Company+Profile+-+Tuban+Perspektif%2A.+Terimakasih.&type=phone_number&app_absent=0"
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
            </div>
            <!-- card baris 1 end -->

            <!-- baris 2 -->
            <div class="hidden from-bottom col-12 row">
                <div class="col-lg-3">
                    <div class="card position-relative">
                        <p class="p-0 m-0 position-absolute">
                            <span class="bg-warning text-white p-1 px-3 rounded-pill">PT Gunung Mas Jaya</span>
                        </p>
                        <img src="../assets/img/gunungmas-company-profile.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Website Compay Profile</h5>
                            <p class="card-text text-secondary">Menampilkan informasi perusahaan dan portofolio agar
                                dapat
                                menjangkau lebih banyak...</p>
                        </div>
                        <div class="card-body d-flex justify-content-end text-end">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2AWebsite+Company+Profile+-+PT+Gunung+Mas+Jaya+Tuban%2A.+Terimakasih.&type=phone_number&app_absent=0"
                                class="btn btn-sm btn-success rounded-pill justify-content-center">
                                <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg>
                                <span class="d-sm-inline d-md-none ps-1">Tanyakan</span>
                            </a>
                            <buttton button type="button" data-bs-toggle="modal" data-bs-target="#ops"
                                class="card-link btn btn-primary btn-sm rounded-pill ms-1 text-white fw-bold">
                                selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg>
                            </buttton>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card position-relative">
                        <p class="p-0 m-0 position-absolute">
                            <span class="bg-warning text-white p-1 px-3 rounded-pill">PT Gunung Mas Jaya</span>
                        </p>
                        <img src="../assets/img/gunungmas-hr.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Self HR Service</h5>
                            <p class="card-text text-secondary">Aplikasi absensi karyawan berserta laporan lembur setiap
                                bulannya</p>
                        </div>
                        <div class="card-body d-flex justify-content-end text-end">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2ASelft+HR+Service+-+PT+Gunung+Mas+Jaya+Tuban%2A.+Terimakasih.&type=phone_number&app_absent=0"
                                class="btn btn-sm btn-success rounded-pill justify-content-center">
                                <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg>
                                <span class="d-sm-inline d-md-none ps-1">Tanyakan</span>
                            </a>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#ops"
                                class="card-link btn btn-primary btn-sm rounded-pill ms-1 text-white fw-bold">
                                selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card position-relative">
                        <p class="p-0 m-0 position-absolute">
                            <span class="bg-warning text-white p-1 px-3 rounded-pill">CV Windra Mekar</span>
                        </p>
                        <img src="../assets/img/windramekar.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Website Company Profile</h5>
                            <p class="card-text text-secondary">Menampilkan informasi perusahaan dan portofolio agar
                                dapat
                                menjangkau lebih banyak...</p>
                        </div>
                        <div class="card-body d-flex justify-content-end text-end">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2AWebsite+Company+Profile+-+CV+Windra+Mekar%2A.+Terimakasih.&type=phone_number&app_absent=0"
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
                            <span class="bg-warning text-white p-1 px-3 rounded-pill">Toko Klontong Tuban</span>
                        </p>
                        <img src="../assets/img/tokoklontongku.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Food Delivery Order</h5>
                            <p class="card-text text-secondary">Tempat belanja kebutuhan pasar, makanan dan minuman
                                serta
                                jasa di Tuban, Jawa Timur</p>
                        </div>
                        <div class="card-body d-flex justify-content-end text-end">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2AFood+Delivery+Order+-+Tokoklontong%2A.+Terimakasih.&type=phone_number&app_absent=0"
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
            </div>
            <!-- baris 2 end -->

            <!-- baris 3 -->
            <div class="hidden from-bottom col-12 row">
                <div class="col-lg-3">
                    <div class="card position-relative">
                        <p class="p-0 m-0 position-absolute">
                            <span class="bg-warning text-white p-1 px-3 rounded-pill">AlHidayat </span>
                        </p>
                        <img src="../assets/img/ali-hidayat.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Manajemen Keuangan dan Koperasi</h5>
                            <p class="card-text text-secondary">Aplikasi untuk manajemen keuangan santri dan koperasi
                            </p>
                        </div>
                        <div class="card-body d-flex justify-content-end text-end">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2AManajemen+Keuangan+dan+Koperasi+-+Alhidayat%2A.+Terimakasih.&type=phone_number&app_absent=0"
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
                            <span class="bg-warning text-white p-1 px-3 rounded-pill">TNest Academy</span>
                        </p>
                        <img src="../assets/img/nest-academy.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Test CPNS Simulator</h5>
                            <p class="card-text text-secondary">Aplikasi untuk mensimulasikan soal-soal dan ujian CPNS
                            </p>
                        </div>
                        <div class="card-body d-flex justify-content-end text-end">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2ATest+CPNS+Simulator+-+Nest+Academy%2A.+Terimakasih.&type=phone_number&app_absent=0"
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
                            <span class="bg-warning text-white p-1 px-3 rounded-pill">Siskesakti Mobile</span>
                        </p>
                        <img src="../assets/img/siskesakti-mobile.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Manajemen Koperasi Pesantren</h5>
                            <p class="card-text text-secondary">Aplikasi manajemen keuangan santri dan koperasi
                                pesantren
                            </p>
                        </div>
                        <div class="card-body d-flex justify-content-end text-end">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2AManajemen+Koperasi+Pesantren+-+Siskesakti+Mobile%2A.+Terimakasih.&type=phone_number&app_absent=0"
                                class="btn btn-sm btn-success rounded-pill justify-content-center">
                                <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg>
                                <span class="d-sm-inline d-md-none ps-1">Tanyakan</span>
                            </a>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#ops"
                                class="card-link btn btn-primary btn-sm rounded-pill ms-1 text-white fw-bold">
                                selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card position-relative">
                        <p class="p-0 m-0 position-absolute">
                            <span class="bg-warning text-white p-1 px-3 rounded-pill">Siskesakti</span>
                        </p>
                        <img src="../assets/img/siskesakti-web.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Manajemen Koperasi Pesantren</h5>
                            <p class="card-text text-secondary">Aplikasi manajemen keuangan santri dan koperasi
                                pesantren
                            </p>
                        </div>
                        <div class="card-body d-flex justify-content-end text-end">
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+Saya+ingin+bertanya+terkait+detail+aplikasi+%2AManajemen+Koperasi+Pesantren+-+Siskesakti%2A.+Terimakasih.&type=phone_number&app_absent=0"
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
            </div>
        </div>
    </div>
</div>
<!-- card end -->
<?php include "../layouts/footer.php" ?>