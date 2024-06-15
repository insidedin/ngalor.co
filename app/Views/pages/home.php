<?= $this->extend('Layout/template'); ?>


<?= $this->section('isi'); ?>

<!-- Hero Section -->
<section id="home" class="hero section" width="100%" height="100">

    <img src="/page/assets/img/foto.png" alt="" data-aos="fade-in" width="100%" height="300">
    <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100" class="">Welcome to  </h2>  <h2 data-aos="fade-up" data-aos-delay="100" class="pink"> NGALOR.CO App</h2>
        <p data-aos="fade-up" data-aos-delay="200">Experience the magic of live music, curated by experts.
        <br>Wujudkan konser impian Anda dengan layanan profesional dan terpercaya dari Ngalur.co</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
        <a class="btn" href="#layanan"><b>Selengkapnya   >></b></a>
        </div>
    </div>
</section><!-- /Hero Section -->

<!--content section-->
<section id="kami" class="setup">
    <br><br><br><br><br>
            <div class="container">
                <div class="text-header text-center">
                    <div>
                        <h3><b>APLIKASI SARAN MI</b></h3>
                    </div>
                    <br><br>
                    <p><b>Kemudahan Pengaduan Sarana dan Prasarana Pada</b> <br>
                    <b>Jurusan Manajemen Informatika</b></p>
                    <p>Aplikasi SARAN MI diimplementasikan pada project UAS Praktikum Rekayasa Web Kelas 6 IN
                    <br>dikembangkan oleh Kelompok 3 : Andini, Gresela, Nabila, dan Natasyah.</p>
                </div>
            </div>
        </section>
        <section id="layanan" class="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <i class="fas fa-chalkboard-teacher fa-3x mb-3"></i>
                        <div class="icons">
                            <img src="https://assetsquokka.files.wordpress.com/2023/09/icons1.png" alt="">
                        </div>
                        <h4><b>PELAPORAN KELAYAKAN</b></h4>
                        <p>Cepat dan tanggap dalam menindaklanjuti pelaporan terkait fasilitas sarana dan prasarana, agar lingkungan jurusan tetap nyaman.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="fas fa-hand-holding-heart fa-3x mb-3"></i>
                        <div class="icons">
                            <img src="https://assetsquokka.files.wordpress.com/2023/09/icons3.png" alt="">
                        </div>
                        <h4><b>BANTUAN INFORMASI</b></h4>
                        <p>Penyedia informasi terpadu terkait fasilitas sarana dan prasarana pada Jurusan Manajemen Informatika.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="fas fa-gavel fa-3x mb-3"></i>
                        <div class="icons">
                            <img src="https://assetsquokka.files.wordpress.com/2023/09/icons2.png" alt="">
                        </div>
                        <h4><b>KRITIK DAN SARAN</b></h4>
                        <p>Membantu Jurusan Manajemen Informatika menjadi lebih baik dan lebih berkembang dengan kritik dan saran yang diberikan.</p>
                    </div>
                </div>
            </div>
            <br>
            <br><br>
</section>

<?= $this->endSection(); ?>