<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('isi'); ?>
<main id="main" class="main">
    <section class="section">
        <div class="pagetitle">
            <h1>Tambah Konten</h1>
        </div><!-- End Page Title -->
        <div class="form">
            <form action="/konten/store" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi:</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar:</label>
                    <input type="text" name="gambar" id="gambar" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>
