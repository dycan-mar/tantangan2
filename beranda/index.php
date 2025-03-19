<?php include "../layouts/header.php" ?>
<style>
    /* hero */
    .hero {
        width: 100%;
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

    .btn-primary {
        background-color: #2124B1;
        padding: 5px 24px;
        border-radius: 30px;
    }


    .container-cta .btn-light {
        /* padding: 14px 38px; */
        border-radius: 30px;

        /* border: solid 1px #ffffff; */
    }


    .btn-transparant {
        background-color: transparent;
        color: #ffffff;
        /* padding: 14px 34px; */
        border-radius: 30px;
        border: solid 1px #ffffff;
    }

    .btn-transparant:hover {
        background-color: #ffffff;
    }

    /* end hero */

    /* news */
    .news {
        background-image: url("../assets/img/bg2.png");
        background-repeat: no-repeat;
        background-size: cover;

        height: 300px;
    }

    /* end news */

    /* jasa dan pelayanan */
    .card-cw {
        background-color: #f1f1f1;
        border-radius: 17px;

        transition: all 0.4s ease-in-out;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 2rem;
    }

    .card-cw img {
        margin-top: -57px;
    }

    .card-cw p {
        opacity: 50%;
    }


    .card-cw a {
        text-decoration: none;
        background-color: #bbb4ff;
        display: flex;
        align-items: center;
        text-align: center;
        margin-left: 70px;
        padding: 10px 15px;
        width: 40px;
        height: 40px;
        border-radius: 50px;
        transition: width 0.4s ease-in-out, background-color 0.4s ease-in-out;
    }

    .card-cw a span {
        position: relative;
        z-index: 2;

    }

    .card-cw:hover {
        background-color: #2124B1;
        color: white;
        transition: background-color 0.4s ease-in-out;
    }

    .card-cw:hover a {
        background-color: #ffffff;
        width: 140px;
    }

    /* end jasa dan pelayanan */

    /* dok-project */
    .project {
        background-image: url("../assets/img/bg2.png");
        height: 500px;
    }

    .swiper-slide {
        background-color: transparent;
        min-width: 300px;
        transition: all 0.3s ease-in-out;
    }





    /* end dok-project */

    /* question */
    .card-question {
        background-color: #f1f1f1;
        border-radius: 15px;

        transition: all 0.3s ease-in-out;
    }

    .card-question:hover {
        background-color: #ffc107;
    }

    .btn-qs {
        transition: transform 0.4s ease-in-out;
    }

    .btn-qs:hover {
        z-index: 1;
        transform: scale(1.2);
    }

    /* end question */
    .animation {
        transition: all 0.5s ease-in-out;
    }

    .tablet {
        display: flex;
    }

    @media (min-width:768px) {
        .tablet {
            display: block;
            padding-top: 1.7rem;
        }
    }
</style>

<!-- hero -->
<div class="hero py-5" id="hero">
    <div class="container-xxl px-md-5 pb-5 p-md-5 mt-5 d-flex justify-align-center">
        <div class=" px-lg-5 text-center ">
            <div class=" row py-5 ">
                <div class="container col-lg-6 mb-sm-4 mb-lg-0">
                    <h1 class="hidden scale-up text-light fs-1 fw-bold  text-lg-start">
                        Optimalkan manajemen usaha Anda bersama Kami
                    </h1>
                    <br>
                    <p class="hidden scale-up text-light fw-medium text-lg-start">
                        <span class="text-warning">Punya usaha tapi masih serba manual?</span> Wujudkan software
                        impian
                        anda
                        untuk membantu mengatur
                        usaha anda dengan optimal. Saatnya miliki aplikasi <em> custom</em> sesuai dengan kebutuhan
                        usaha
                        anda dan nikmati manajemen secara otomatis.
                    </p>
                    <div class="container-cta text-lg-start">
                        <a class="hidden from-left m-md-3 btn btn-light px-sm-3 py-sm-1 px-md-4 py-md-3" target="_blank"
                            href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+saya+ingin+konsultasi+terkait+website+yang+cocok+untuk+usaha+saya.+Terimakasih+atas+tanggapannya.&type=phone_number&app_absent=0">Hubungi
                            Kami</a>
                        <a class="hidden from-right m-3 btn btn-transparant px-sm-3 py-sm-1 px-md-4 py-md-3"
                            href="<?= $baseurl ?>karir/">Lowongan</a>
                    </div>
                </div>
                <div class="container col-lg-6 mt-sm-4 mt-lg-0">
                    <img class="img-fluid" src="../assets/img/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

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
                <a href="<?= $baseurl ?>about" class="btn btn-primary me-3">Selengkapnya</a>
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

<!-- jasa dan pelayanan -->
<section class="hidden from-bottom jasaPelayanan container mt-5" id="jasaDanPelayanan">
    <div class=" p-5 pt-5 d-block justify-align-center text-center">
        <h6 class="text-primary">Jasa dan Layanan</h6>
        <h2 class="fw-bold">Berikut adalah jenis jasa dan layanan kami untuk memenuhi kebutuhan digital anda.
        </h2>
        <div class=" mt-5 row d-flex justify-content-between text-center">
            <div class="hidden scale-up delay-1 container p-3 col-md-6 col-lg-4  card-cw">
                <div class="text-center">
                    <img src="../assets/img/pembuatan-website.png" alt="">
                </div>
                <h5 class="fw-medium">Custom Web App</h5>
                <p class="">
                    Optimalkan usaha dengan Custom Web App seperti: Kelola Keuangan, Stok Gudang, Laporan Pekerjaan,
                    dll
                </p>

                <a class="text-primary"
                    href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+saya+ingin+konsultasi+terkait+website+yang+cocok+untuk+usaha+saya.+Terimakasih+atas+tanggapannya.&type=phone_number&app_absent=0"
                    target="_blank">
                    <span> Selengkapnya...</span>
                </a>
            </div>

            <div class="hidden scale-up delay-2 container p-3  col-md-6 col-lg-4 card-cw">
                <div class="text-center">
                    <img src="../assets/img/upgrade-konten.png" alt="">
                </div>
                <h5 class="fw-medium">Pembuatan Website
                </h5>
                <p class="">
                    Ingin usaha anda dikenal dan diminati calon pelanggan? Segera wujudkan dengan membuat website
                    company...
                </p>

                <a class="text-primary"
                    href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+saya+ingin+konsultasi+terkait+website+yang+cocok+untuk+usaha+saya.+Terimakasih+atas+tanggapannya.&type=phone_number&app_absent=0"
                    target="_blank">
                    <span> Selengkapnya...</span>
                </a>

            </div>

            <div class="hidden scale-up delay-3 container p-3  col-md-6 col-lg-4 card-cw">
                <div class="text-center">
                    <img src="../assets/img/aplikasi-android.png" alt="">
                </div>
                <h5 class="fw-medium">Aplikasi Android</h5>
                <p class="">
                    Butuh aplikasi android atau desktop dengan fitur yang sesuai kebutuhan anda? Kami siap
                    mewujudkan...
                </p>

                <a class="text-primary"
                    href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+saya+ingin+konsultasi+terkait+website+yang+cocok+untuk+usaha+saya.+Terimakasih+atas+tanggapannya.&type=phone_number&app_absent=0"
                    target="_blank">
                    <span> Selengkapnya...</span>
                </a>

            </div>

            <div class="hidden scale-up delay-4 container p-4 col-12 col-md-6 col-lg-4 card-cw">
                <div class="text-center">
                    <img src="../assets/img/landing-page.png" alt="">
                </div>
                <h5 class="fw-medium">Aplikasi Desktop</h5>
                <p class="">
                    Buat anda yang menginginkan aplikasi yang hanya dapat diakses di komputer kantor, aplikasi
                    desktop
                    solusinya.
                </p>

                <a class="text-primary"
                    href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+saya+ingin+konsultasi+terkait+website+yang+cocok+untuk+usaha+saya.+Terimakasih+atas+tanggapannya.&type=phone_number&app_absent=0"
                    target="_blank">
                    <span> Selengkapnya...</span>
                </a>

            </div>

            <div class="hidden scale-up delay-5 container p-4 col-12 col-md-6 col-lg-4 card-cw">
                <div class="text-center">
                    <img src="../assets/img/upgrade-website.png" alt="">
                </div>
                <h5 class="fw-medium">Upgrade Website</h5>
                <p class="">
                    Website anda sudah usang dan tampilan tidak menarik. Serahkan kepada kami, akan kami upgrade...
                </p>

                <a class="text-primary"
                    href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+saya+ingin+konsultasi+terkait+website+yang+cocok+untuk+usaha+saya.+Terimakasih+atas+tanggapannya.&type=phone_number&app_absent=0"
                    target="_blank">
                    <span> Selengkapnya...</span>
                </a>

            </div>

            <div class="hidden scale-up delay-6 container p-4 col-12 col-md-6 col-lg-4 card-cw">
                <div class="text-center">
                    <img src="../assets/img/desain-grafis.png" alt="">
                </div>
                <h5 class="fw-medium">Landing Page</h5>
                <p class="">
                    Anda mempunyai bisnis online namun tidak punya website? Kami siap membuatkan landing page usaha
                    anda.
                </p>
                <a class="text-primary"
                    href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+saya+ingin+konsultasi+terkait+website+yang+cocok+untuk+usaha+saya.+Terimakasih+atas+tanggapannya.&type=phone_number&app_absent=0"
                    target="_blank">
                    <span> Selengkapnya...</span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- dok-project -->
<section class="hidden from-bottom project" id="project">
    <div class="container py-5">
        <div class="swiper-container" style="overflow: hidden;width: 100%;">
            <div class="swiper-wrapper">
                <div class="swiper-slide  p-4 p-md-2 p-lg-4  border rounded"
                    style="width: 271.333px; margin-right: 25px;">
                    <div class=" text-light p-4 p-md-1 p-lg-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-quote mb-3" viewBox="0 0 16 16">
                            <path
                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                        </svg>
                        <p class="fw-semibold">Profesional Web Company Profile, menampilkan informasi secara lengkap
                        </p>
                        <div class="tablet">
                            <img class="img-fluid" src="../assets/img/tuban-perspektif.png" alt=""
                                style="height: 50px; width: auto;">
                            <div class="ps-4">
                                <h6 class="text-whie mb-1">Tuban Perspektif</h6>
                                <small>Company Profile</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide  p-4 p-md-2 p-lg-4 border rounded"
                    style="width: 271.333px; margin-right: 25px;">
                    <div class=" text-light p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-quote mb-3" viewBox="0 0 16 16">
                            <path
                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                        </svg>
                        <p class="fw-semibold">Aplikasi manajemen klaim asuransi yang dilengkapi status proses klaim
                        </p>
                        <div class="tablet">
                            <img class="img-fluid" src="../assets/img/tbm.png" alt=""
                                style="height: 50px; width: auto;">
                            <div class="ps-4">
                                <h6 class="text-whie mb-1">TBM</h6>
                                <small>Klaim Asuransi</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide p-4 p-md-2 p-lg-4 border rounded shadow"
                    style="width: 271.333px; margin-right: 25px;">
                    <div class="  text-light p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-quote mb-3" viewBox="0 0 16 16">
                            <path
                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                        </svg>
                        <p class="fw-semibold">Aplikasi webview untuk memudahkan pelanggan membaca berita model koran
                        </p>
                        <div class="tablet">
                            <img class="img-fluid" src="../assets/img/radarutara.png" alt=""
                                style="height: 50px; width: auto;">
                            <div class="ps-4">
                                <h6 class="text-whie mb-1">Radar Utara</h6>
                                <small>Website Android</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide p-4 p-md-2 p-lg-4 border rounded  shadow"
                    style="width: 271.333px; margin-right: 25px;">
                    <div class=" text-light p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-quote mb-3" viewBox="0 0 16 16">
                            <path
                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                        </svg>
                        <p class="fw-semibold">Aplikasi untuk manajemen stok sparepart dan pelaporan pekerjaan setiap
                            hari
                        <div class="tablet">
                            <img class="img-fluid" src="../assets/img/shell-indonesia.png" alt=""
                                style="height: 50px; width: auto;">
                            <div class="ps-4">
                                <h6 class="text-whie mb-1">PT Shell Indonesia</h6>
                                <small>Warehouse Management</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide p-4 p-md-2 p-lg-4 border rounded shadow"
                    style="width: 271.333px; margin-right: 25px;">
                    <div class="  text-light p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-quote mb-3" viewBox="0 0 16 16">
                            <path
                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                        </svg>
                        <p class="fw-semibold">Sistem Keuangan Santri & Koperasi Berbasis Teknologi untuk pondok
                            pesantren
                        </p>
                        <div class="tablet">
                            <img class="img-fluid" src="../assets/img/siskesakti.png" alt=""
                                style="height: 50px; width: auto;">
                            <div class="ps-4">
                                <h6 class="text-whie mb-1">Siske Sakti</h6>
                                <small>Keuangan & Koperasi</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide p-4 p-md-2 p-lg-4 border rounded shadow"
                    style="width: 271.333px; margin-right: 25px;">
                    <div class=" text-light p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-quote" viewBox=" 0 0 16 16">
                            <path
                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                        </svg>
                        <p class="fw-semibold">Aplikasi untuk mengatur pesanan, proses produksi dan manajemen stok kain
                        </p>
                        <div class="tablet">
                            <img class="img-fluid" src="../assets/img/tubanesiaicon.png" alt=""
                                style="height: 50px; width: auto;">
                            <div class="ps-4">
                                <h6 class="text-whie mb-1">Tubanesia</h6>
                                <small>Order Management</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>

<!-- asked question -->
<section class=" question my-5 mt-5" id="question">
    <div class="container pt-5 d-block">
        <h6 class="hidden from-bottom text-primary text-center">Yang sering ditanyakan
        </h6>
        <h2 class="hidden from-bottom text-center">Frequently Asked <span class="text-primary"> <b>Questions</b></span>
        </h2>

        <!-- container-card -->
        <div class="container row justify-content-center mt-5 py-3" style="gap: 2rem;">
            <!-- card -->
            <div class="hidden from-bottom col-md-5 px-3 px-md-1 px-lg-3 card-question py-3 d-flex ">
                <div>
                    <span class=" px-2 py-1 rounded-circle bg-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#ffffff"
                            class="bi bi-question-lg mb-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14" />
                        </svg>
                    </span>
                </div>
                <div class="container ">
                    <h4>Dokumen apa saja yang diperlukan untuk membuat website?
                    </h4>
                    <p>Tidak ada dokumen khusus yang dibutuhkan untuk pembuatan website, kecuali perusahaan anda
                        bergerak dibidang tertentu yang mengharuskan penyertaan dokumen seperti tertera pada kebijakan
                        privasi kami.

                    </p>
                </div>
            </div>
            <div class="hidden from-bottom col-md-5 px-3 px-md-1 px-lg-3 card-question py-3 d-flex ">
                <div>
                    <span class=" px-2 py-1 rounded-circle bg-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#ffffff"
                            class="bi bi-question-lg mb-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14" />
                        </svg>
                    </span>
                </div>
                <div class="container ">
                    <h4>Apakah saya bisa mengajukan revisi jika website tidak sesuai dengan kebutuhan?
                    </h4>
                    <p>Ya, anda dapat mengajukan revisi sebelum anda benar-benar menerima username dan password website.
                        Jika anda sudah menerima username dan password, revisi dapat kami lakukan selama tidak merubah
                        fungsi dan tampilan yang kompleks. Jika revisi dikarenakan bug, maka kami akan memperbaiki tanpa
                        biaya apapun.
                    </p>
                </div>
            </div>
            <div class="hidden from-bottom col-md-5 px-3 px-md-1 px-lg-3 card-question py-3 d-flex ">
                <div>
                    <span class=" px-2 py-1 rounded-circle bg-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#ffffff"
                            class="bi bi-question-lg mb-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14" />
                        </svg>
                    </span>
                </div>
                <div class="container ">
                    <h4>Kapan saya melakukan pembayaran website?
                    </h4>
                    <p>Anda dapat melakukan pembayaran website setelah website jadi dan siap digunakan.
                    </p>
                </div>
            </div>
            <div class="hidden from-bottom col-md-5 px-3 px-md-1 px-lg-3 card-question py-3 d-flex ">
                <div>
                    <span class=" px-2 py-1 rounded-circle bg-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#ffffff"
                            class="bi bi-question-lg mb-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14" />
                        </svg>
                    </span>
                </div>
                <div class="container ">
                    <h4>Apakah saya dapat mengajukan penambahan fitur baru?
                    </h4>
                    <p>Ya, kapanpun anda mebutuhkan fitur baru kami siap menambahkannya sesuai dengan kesepakatan.
                    </p>
                </div>
            </div>
            <div class="hidden from-bottom col-md-5 px-3 px-md-1 px-lg-3 card-question py-3 d-flex ">
                <div>
                    <span class=" px-2 py-1 rounded-circle bg-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#ffffff"
                            class="bi bi-question-lg mb-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14" />
                        </svg>
                    </span>
                </div>
                <div class="container ">
                    <h4>Adakah masa uji coba?
                    </h4>
                    <p>Ada, setiap produk yang kami buat mempunyai masa uji coba dengan ketentuan waktu yang
                        berbeda-beda sesuai dengan kerumitan produk. Semakin komplek produk maka waktu uji coba semakin
                        lama, antara 1 sampai dengan 3 bulan.
                    </p>
                </div>
            </div>
            <div class="hidden from-bottom col-md-5 px-3 px-md-1 px-lg-3 card-question py-3 d-flex ">
                <div>
                    <span class=" px-2 py-1 rounded-circle bg-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#ffffff"
                            class="bi bi-question-lg mb-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14" />
                        </svg>
                    </span>
                </div>
                <div class="container ">
                    <h4>Bagaimana saya mendapatkan panduan pengelolaan produk yang saya pesan?
                    </h4>
                    <p>Ya, kapanpun anda mebutuhkan fitur baru kami siap menambahkannya sesuai dengan kesepakatan.Anda
                        akan mendapatkan panduan secara tertulis maupun video. Jika masih merasa kesulitan, kami akan
                        memandu langsung melalui Whatsapp.
                    </p>
                </div>
            </div>
            <div class="hidden from-bottom col-12 px-3 card-question py-4 g-3 d-flex" style="width: 100%;">
                <div>
                    <span class=" px-2 py-1 rounded-circle bg-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#ffffff"
                            class="bi bi-question-lg mb-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14" />
                        </svg>
                    </span>
                </div>
                <div class="container">
                    <h4>Bagaimana saya mendapatkan panduan pengelolaan produk yang saya pesan?
                    </h4>
                    <p>Ya, kapanpun anda mebutuhkan fitur baru kami siap menambahkannya sesuai dengan kesepakatan.Anda
                        akan mendapatkan panduan secara tertulis maupun video. Jika masih merasa kesulitan, kami akan
                        memandu langsung melalui Whatsapp.
                    </p>
                    <p>
                        <a class="btn btn-success  rounded-pill btn-qs " target="_blank"
                            href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+saya+ingin+konsultasi+terkait+Custom+Web+App+yang+cocok+untuk+usaha+saya.+Terimakasih+atas+tanggapannya.&type=phone_number&app_absent=0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-whatsapp mb-1" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            <b>Tanyakan lewat Whatsapp</b>
                        </a>
                        <a class="btn btn-primary btn-qs mx-md-4 mt-2 mt-md-0" target="_blank"
                            href="https://api.whatsapp.com/send/?phone=6281213404031&text=Halo+kak%2C+saya+ingin+konsultasi+terkait+Custom+Web+App+yang+cocok+untuk+usaha+saya.+Terimakasih+atas+tanggapannya.&type=phone_number&app_absent=0">
                            <b> Lihat lebih banyak FAQ
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#ffffff"
                                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                                </svg>
                            </b>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <script>
    const hero = document.getElementById("hero");

    const testimonials = [
        {
            text: "Aplikasi untuk mengatur pesanan, proses produksi dan manajemen stok kain", company: "Tubanesia",
            category: "Order Management",
            img: "tubanesiaicon.png"
        },
        {
            text: "Sistem Keuangan Santri & Koperasi Berbasis Teknologi untuk pondok pesantren", company: "Siske Sakti",
            category: "Keuangan  &amp; Koperasi",
            img: "siskesakti.png"
        },
        {
            text: "Profesional Web Company Profile, menampilkan informasi secara lengkap", company: "Tuban Perspektif",
            category: "Company Profile",
            img: "tuban-perspektif.png"
        },
        {
            text: " Aplikasi untuk manajemen stok sparepart dan pelaporan pekerjaan setiap hari",
            company: "PT Shell Indonesia",
            category: "Warehouse Management",
            img: "shell-indonesia.png"
        },
        {
            text: "Aplikasi manajemen klaim asuransi yang dilengkapi status proses klaim",
            company: "TBM",
            category: "Klaim Asuransi",
            img: "tbm.png"
        },
        {
            text: "Aplikasi webview untuk memudahkan pelanggan membaca berita model koran",
            company: "Radar Utara",
            category: "Webview Android",
            img: "radarutara.png"
        },

    ];

    let index = 0;
    let isDragging = false;
    let startX = 0;
    let animationFrame;

    function renderCards() {
        const carousel = document.getElementById("carousel");
        carousel.innerHTML = "";

        for (let i = 0; i < 3; i++) {
            let pos = (index + i) % testimonials.length;
            const item = testimonials[pos];
            const card = document.createElement("div");
            card.className = "card p-4 animation shadow-lg rounded";

            if (i === 1) {
                card.classList.add("active-project");
            }

            card.innerHTML = `
            <div class="card-body text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffc107" class="bi bi-quote" viewBox="0 0 16 16">
                    <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/>
                </svg>
                <p class="card-text fw-semibold mt-3">${item.text}</p>
                <div class="d-flex align-items-center mt-4">
                    <img class="img-project rounded-circle" src="../assets/img/${item.img}" width="50" height="50">
                    <div class="ms-3 text-start">
                        <h5 class="card-title mb-0">${item.company}</h5>
                        <p class="card-subtitle text-muted small">${item.category}</p>
                    </div>
                </div>
            </div>
        `;
            carousel.appendChild(card);
        }
    }

    function autoScroll() {
        setInterval(() => {
            index = (index + 1) % testimonials.length;
            animateSwipe(-100);
        }, 3000);
    }

    function animateSwipe(offset) {
        const carousel = document.getElementById("carousel");
        carousel.style.transition = "transform 0.5s ease-in-out";
        carousel.style.transform = `translateX(${offset}%)`;
        setTimeout(() => {
            carousel.style.transition = "all 0.5s ease-in";
            carousel.style.transform = "translateX(0)";
            renderCards();
        }, 500);
    }

    function onDragStart(event) {
        isDragging = true;
        startX = event.clientX || event.touches[0].clientX;
    }

    function onDragMove(event) {
        if (!isDragging) return;
        let moveX = (event.clientX || event.touches[0].clientX) - startX;
        if (Math.abs(moveX) > 50) {
            index = (moveX > 0) ? (index - 1 + testimonials.length) % testimonials.length : (index + 1) % testimonials.length;
            isDragging = false;
            animateSwipe(moveX > 0 ? 100 : -100);
        }
    }

    function onDragEnd() {
        isDragging = false;
    }

    document.addEventListener("DOMContentLoaded", () => {
        renderCards();
        autoScroll();

        const carouselWrapper = document.getElementById("carouselWrapper");
        carouselWrapper.addEventListener("mousedown", onDragStart);
        carouselWrapper.addEventListener("mousemove", onDragMove);
        carouselWrapper.addEventListener("mouseup", onDragEnd);
        carouselWrapper.addEventListener("mouseleave", onDragEnd);
        carouselWrapper.addEventListener("touchstart", onDragStart);
        carouselWrapper.addEventListener("touchmove", onDragMove);
        carouselWrapper.addEventListener("touchend", onDragEnd);
    });

</script> -->

<?php include "../layouts/footer.php"; ?>