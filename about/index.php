<?php include "../layouts/header.php" ?>
<style>
    /* hero */
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

    /* news */
    .news {
        background-image: url("../assets/img/bg2.png");
        background-repeat: no-repeat;
        background-size: cover;
        height: 300px;
    }

    /* end news */

    @media (max-width:991px) {
        #hero {
            height: 50vh;
        }
    }
</style>



<section id="hero" class="d-flex justify-content-center align-items-center text-light">
    <div class="d-block text-center">
        <h1 class="hidden scale-up fw-bold">Kontak Kami</h1>
        <div class="located d-flex mt-3">
            <a href="">Beranda<i>/</i></a>
            <a href=""> Halaman<i>/</i></a>
            <a href="">Kontak Kami</a>
        </div>
    </div>
</section>

<!-- about -->
<section class="about mb-5 mt-5 pt-3 container  d-flex justify-align-center " id="about">
    <div class="row">
        <div class="hidden from-bottom container col-lg-6">
            <h6 class="text-primary">Tentang Kami</h6>
            <h1 class="fw-bold fs-2 ">
                Spesialis aplikasi <em>custom</em> dengan tim yang berpengalaman
            </h1>
            <p class="mt-3" style="opacity: 50%">
                Tuban Web adalah penyedia jasa pembuatan website, aplikasi android dan desktop yang berpusat di Tuban -
                Jawa
                Timur. <br>
                Kami siap melayani segala kebutuhan digital anda terutama untuk aplikasi custom. Anda dapat
                mengkosultasikan
                kebutuhan digital anda pada kami secara gratis. Kami akan dengan senang hati melayani anda. Berikut
                adalah
                value perusahaan kami saat melayani Anda:
            </p>
            <div class="container row ">
                <div class="col-md-6 ">
                    <p class="text-dark"> ✔️ Profesional</p>
                    <p class="text-dark"> ✔️ Responsif</p>
                </div>
                <div class="col-md-6">
                    <p class="text-dark"> ✔️ 24/7 Support</p>
                    <p class="text-dark"> ✔️ Harga Terjangkau</p>
                </div>
            </div>
            <div class="container d-flex align-items-center justify-align-center ">
                <a class="btn-sosmed me-3" target="_blank" href="https://www.facebook.com/tubanweb">f</a>
                <a class="btn-sosmed me-3" target="_blank" href="https://www.instagram.com/tubanweb/">
                    <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="#2124B1"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg>
                </a>
                <a class="btn-sosmed" target="_blank"
                    href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+saya+ingin+konsultasi+terkait+website+yang+cocok+untuk+usaha+saya.+Terimakasih+atas+tanggapannya.&type=phone_number&app_absent=0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2124B1" class="bi bi-whatsapp"
                        viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="hidden scale-up img col-lg-6 pt-lg-4" style="text-align:center;">
            <img class="img-fluid" src="<?= $baseurl ?>assets/img/about.jpg" alt="">
        </div>
    </div>
</section>

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
                            </svg> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- project unggulan end -->
<?php include "../layouts/footer.php" ?>