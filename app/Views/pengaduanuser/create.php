<?= $this->extend('layoutuser/template'); ?>

<?= $this->section('isi'); ?>

<main id="main" class="main">
    <section class="section">
        <div class="pagetitle">
            <h1>Buat Pengaduan</h1>
        </div><!-- End Page Title -->
        <div class="card">
            <div class="card-body">
                <form action="/pengaduan/store-pengaduan" method="post">
                    <div class="mb-3">
                        <label for="perihal" class="form-label">Perihal:</label>
                        <input type="text" name="perihal" id="perihal" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi:</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="pengadu" class="form-label">Pengadu:</label>
                        <input type="text" name="pengadu" id="pengadu" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar:</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_pengaduan" class="form-label">Tanggal Pengaduan:</label>
                        <input type="date" name="tanggal_pengaduan" id="tanggal_pengaduan" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>
