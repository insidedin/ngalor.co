<?= $this->extend('layoutuser/template'); ?>

<?= $this->section('isi'); ?>

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">
            <div class="pagetitle">
                <h1>Tambah Pengaduan</h1>
                <a href="/pengaduanuser/create" class="btn btn-primary">Tambah Pengaduan</a>
            </div><!-- End Page Title -->
        </div>

        <!-- Pengaduan Card -->
        <div class="col-xxl-12 col-xl-12">
            <div class="card info-card customers-card" style="width: 100%;">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Perihal</th>
                                <th>Deskripsi</th>
                                <th>Pengadu</th>
                                <th>Gambar</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($pengaduan as $row): ?>
                            <tr>
                                <td><?= $row['perihal']; ?></td>
                                <td><?= $row['deskripsi']; ?></td>
                                <td><?= $row['pengadu']; ?></td>
                                <td><img src="/uploads/<?= $row['gambar']; ?>" alt="<?= $row['perihal']; ?>" width="100"></td>
                                <td><?= $row['tanggal_pengaduan']; ?></td>
                                <td><?= $row['status']; ?></td>
                                <td>
                                    <a href="/pengaduan/delete/<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- End Pengaduan Card -->
    </section>
</main><!-- End #main -->

<?= $this->endSection(); ?>
