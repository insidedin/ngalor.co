<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('isi'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Pengaduan</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <form action="/pengaduan/update/<?= $pengaduan['id'] ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="perihal" class="form-label">Perihal:</label>
                        <input type="text" name="perihal" id="perihal" class="form-control" value="<?= $pengaduan['perihal'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi:</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" required><?= $pengaduan['deskripsi'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="pengadu" class="form-label">Pengadu:</label>
                        <input type="text" name="pengadu" id="pengadu" class="form-control" value="<?= $pengaduan['pengadu'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar:</label>
                        <input type="file" name="gambar" id="gambar" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_pengaduan" class="form-label">Tanggal Pengaduan:</label>
                        <input type="date" name="tanggal_pengaduan" id="tanggal_pengaduan" class="form-control" value="<?= $pengaduan['tanggal_pengaduan'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status:</label>
                        <input type="text" name="status" id="status" class="form-control" value="<?= $pengaduan['status'] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </section>
</main><!-- End #main -->

<?= $this->endSection(); ?>
