<?= $this->extend('Layout/template'); ?>


<?= $this->section('isi'); ?>

<!-- Hero Section -->
<section id="home" class="hero section" width="100%" height="100">

    <img src="/page/assets/img/foto.png" alt="" data-aos="fade-in" width="100%" height="300">
    <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100" class="">Welcome to  </h2>  <h2 data-aos="fade-up" data-aos-delay="100" class="pink"> NGALOR.CO </h2>
        <p data-aos="fade-up" data-aos-delay="200">Experience the magic of live music, curated by experts.
        <br>Wujudkan konser impian Anda dengan layanan profesional dan terpercaya dari Ngalur.co</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
        <a class="btn" href="/konten"><b>Find Ticket Now   >></b></a>
        </div>
    </div>
</section><!-- /Hero Section -->

<?= $this->endSection(); ?>