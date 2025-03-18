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
<section id="hero" class="container-xxl d-flex justify-content-center align-items-center text-light">
    <div class="d-block text-center">
        <h1 class="hidden scale-up fw-bold">Cara Pesan</h1>
        <div class="located d-flex mt-3">
            <a href="../beranda/index.php">Beranda<i>/</i></a>
            <a href=""> Halaman<i>/</i></a>
            <a href="">Cara pesan</a>
        </div>
    </div>
</section>
<!-- section atas end -->

<!-- 2 -->
<div class=" container-xxl py-5">
    <div class="hidden from-bottom container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="text-primary position-relative"><b>Cara Pemesanan</b></h6>
                    <h2 class="mt-2">Alur Pemesanan Website</h2>
                    <p class="mb-4 text-secondary">
                        Berikut adalah beberapa tahapan yang dilakukan dalam proses pemesanan website, aplikasi android
                        atau
                        aplikasi desktop di TubanWeb.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-3 border-bottom pb-5">
            <div class="col-sm-6">
                <div class="card mb-3 position-relative step-card" style="border-radius: 10px;" id="card">
                    <div class="position-absolute btn btn-lg btn-primary btn-lg-square"
                        style="right:-10px; top: -10px; border-radius:100%;">
                        01
                    </div>
                    <div class="card-body">
                        <h5 class="card-tite">Pilih Paket</h5>
                        <p class="card-text">Silahkan memilih paket website sesuai dengan kebutuhan anda.</p>
                    </div>
                </div>
                <div class="card mb-3 position-relative step-card" style="border-radius: 10px;" id="card">
                    <div class="position-absolute btn btn-lg btn-primary btn-lg-square"
                        style="right:-10px; top: -10px; border-radius:100%;">
                        02
                    </div>
                    <div class="card-body">
                        <h5 class="card-tite">Tentukan Desain</h5>
                        <p class="card-text">Pilih desain yang anda inginkan. Anda dapat mengajukan desain sendiri
                            dengan menyertakan contoh website yang anda inginkan.</p>
                    </div>
                </div>
                <div class="card mb-3 position-relative step-card" style="border-radius: 10px;" id="card">
                    <div class="position-absolute btn btn-lg btn-primary btn-lg-square"
                        style="right:-10px; top: -10px; border-radius:100%;">
                        03
                    </div>
                    <div class="card-body">
                        <h5 class="card-tite">Lengkapi Data Pemesanan</h5>
                        <p class="card-text">Lengkapi data pemesan untuk dikirimkan ke admin agar dapat diproses lebih
                            lanjut. Data ini berupa nama, alamat, email, perusahaan, cara bayar, paket dan desain yang
                            dipilih.</p>
                    </div>
                </div>
                <div class="card mb-3 position-relative step-card" style="border-radius: 10px;" id="card">
                    <div class="position-absolute btn btn-lg btn-primary btn-lg-square"
                        style="right:-10px; top: -10px; border-radius:100%;">
                        04
                    </div>
                    <div class="card-body">
                        <h5 class="card-tite">Verifikasi Admin</h5>
                        <p class="card-text">Admin kami akan memverifikasi pesanan anda, kemudian admin kami akan
                            menghubungi anda via email atau whatsapp.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card mb-3 position-relative step-card" style="border-radius: 10px;" id="card">
                    <div class="position-absolute btn btn-lg btn-primary btn-lg-square"
                        style="right:-10px; top: -10px; border-radius:100%;">
                        05
                    </div>
                    <div class="card-body">
                        <h5 class="card-tite">Kirimkan Data</h5>
                        <p class="card-text">Kirimkan data untuk website anda sesuai dengan template yang kami berikan.
                            Atau anda dapat mengirimkan brosur usaha anda. Kami akan merubahnya menjadi website.</p>
                    </div>
                </div>
                <div class="card mb-3 position-relative step-card" style="border-radius: 10px;" id="card">
                    <div class="position-absolute btn btn-lg btn-primary btn-lg-square"
                        style="right:-10px; top: -10px; border-radius:100%;">
                        06
                    </div>
                    <div class="card-body">
                        <h5 class="card-tite">Pengerjaan Website</h5>
                        <p class="card-text">Pengerjaan website akan langsung kami mulai jika data anda sudah lengkap.
                            Jika data anda belum siap kami akan tetep mengerjakan website anda dengan isi atau data
                            sementara.
                        </p>
                    </div>
                </div>
                <div class="card mb-3 position-relative step-card" style="border-radius: 10px;" id="card">
                    <div class="position-absolute btn btn-lg btn-primary btn-lg-square"
                        style="right:-10px; top: -10px; border-radius:100%;">
                        07
                    </div>
                    <div class="card-body">
                        <h5 class="card-tite">Lihat dan Revisi Website</h5>
                        <p class="card-text">Hasil website anda akan kami kirimkan ke anda untuk dilihat dan dikoreksi
                            jika ada yang kurang sesuai. Kami akan melakukan revisi sampai website sesuai dengan
                            keinginan anda.</p>
                    </div>
                </div>
                <div class="card mb-3 position-relative step-card" style="border-radius: 10px;" id="card">
                    <div class="position-absolute btn btn-lg btn-primary btn-lg-square"
                        style="right:-10px; top: -10px; border-radius:100%;">
                        08
                    </div>
                    <div class="card-body">
                        <h5 class="card-tite">Pembayaran dan Launching</h5>
                        <p class="card-text">Jika website sudah sesuai dengan keinginan anda maka pembayaran harus
                            dilakukan dan website akan kami aktifkan. Website siap digunakan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 hidden from-bottom">
            <div class="section-title position-relative pb-2">
                <h2 class="section-title position-relative pb-2 mt-5 border-bottom">Template Data</h2>
            </div>
            <p class="mb-4">
                Sebelum kami mengerjakan website anda, ada beberapa data yang harus dikirimkan. Namun tidak semua data
                harus siap saat pemesanan website. Berikut adalah template keperluan data:
            </p>
            <div class="row g-3">
                <div class="col-sm-8">
                    <ul>
                        <li class="text-dark">Nama perusahaan / usaha.</li>
                        <li class="text-dark">Logo perusahaan, jika belum punya anda dapat pesan di kami.</li>
                        <li class="text-dark">Slogan perusahaan.</li>
                        <li class="text-dark">Deskripsi perusahaan.</li>
                        <li class="text-dark">Visi dan Misi perusahaan.</li>
                        <li class="text-dark">Sejarah perusahaan.</li>
                        <li class="text-dark">Alamat perusahaan.</li>
                        <li class="text-dark">Kontak perusahaan "email, telepon, facebook, whatsapp, instagram, linked
                            in, twiter, google +, dll".</li>
                        <li class="text-dark">Keunggulan (layanan atau produk) perusahaan.</li>
                        <li class="text-dark">Photo Gallery.</li>
                        <li class="text-dark">Video Gallery.</li>
                        <li class="text-dark">4 Produk unggulan dan 4 produk biasa (beserta foto).</li>
                        <li class="text-dark">4 Layanan unggulan dan layanan biasa (beserta foto).</li>
                        <li class="text-dark">Activitas / Project yang telah dilaksanakan perusahaan.</li>
                    </ul>
                </div>
                <div class="hidden scale-up col-sm-4 d-sm-none d-md-block">
                    <img src="../assets/img/order-placeholder.svg" alt="" class="img-fluid wow zoomIn">
                </div>
            </div>
        </div>
        <div class="col-lg-12 wow fadeInUp">
            <hr>
        </div>
        <div class="col-lg-12 hidden from-bottom">
            <div class="section-title position-relative mb-2 pb-2">
                <h2 class="mt-5">Estimasi Waktu Pengerjaan</h2>
            </div>
            <p class="mb-4">Tabel waktu pemesanan ini hanya berlaku untuk pemesanan “Website dan Landing Page”.</p>
            <div class="row g-3">
                <div class="col-sm-12">
                    <div class="w-100">
                        <table class="w-100 table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-primary text-white"></th>
                                    <th class="bg-primary text-white text center">Hari 1</th>
                                    <th class="bg-primary text-white text center">Hari 2</th>
                                    <th class="bg-primary text-white text center">Hari 3</th>
                                    <th class="bg-primary text-white text center">Hari 4</th>
                                    <th class="bg-primary text-white text center">Hari 5</th>
                                    <th class="bg-primary text-white text center">Hari 6</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-dark">Pilih Paket</td>
                                    <td class="bg-warning"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Pilih Desain</td>
                                    <td class="bg-warning"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Lengkapi Data dan Pemesanan</td>
                                    <td class="bg-warning"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Vertifikasi Admin</td>
                                    <td class="bg-warning"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Kirimkan Data</td>
                                    <td></td>
                                    <td class="bg-warning"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Pengerjaan Website</td>
                                    <td></td>
                                    <td class="bg-warning"></td>
                                    <td class="bg-warning"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Revisi Website</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="bg-warning"></td>
                                    <td class="bg-warning"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Pembayaran</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="bg-warning"></td>
                                </tr>
                                <tr>
                                    <td class="text-dark">Launching</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="bg-warning"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="pt-4">
                        <span class="text-danger">Catatan</span>
                    </p>
                    <ul>
                        <li style="opacity: 50%;">
                            Jika revisi melebihi batas waktu yang ditentukan, terutama jika tidak ada proses oleh
                            pelanggan maka pembayaran wajib dilakukan sesuai jadwal. Revisi akan dilanjutkan setelah
                            pelanggan menyiapkan data untuk revisi. Revisi setelah waktu ini tidak berlaku jika ada
                            perombakan desain website.
                        </li>
                        <li style="opacity: 50%;">
                            Revisi bisa melebihi 2 hari jika pelanggan aktif melakukan komunikasi dalam proses revisi.
                        </li>
                        <li style="opacity: 50%;">
                            Waktu pengerjaan website sangat tergantung dengan kerumitan website. Semakin rumit maka
                            waktu semakin lama. Waktu ini akan ditentukan sesuai paket yang anda pilih. Secara umum akan
                            dikerjakan selama 2 hari saja.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 2 end -->


<?php include "../layouts/footer.php" ?>