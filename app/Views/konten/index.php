<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('isi'); ?>
<main id="main" class="main">
    <section class="section">
        <div class="pagetitle">
            <h1>Manajemen Konten</h1>
            <a href="/konten/create" class="btn btn-primary">Tambah Konten</a>
        </div><!-- End Page Title -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($konten as $k): ?>
                        <tr>
                            <td><?= $k['title'] ?></td>
                            <td><?= $k['deskripsi'] ?></td>
                            <td><img src="<?= $k['gambar'] ?>" alt="<?= $k['title'] ?>" width="100"></td>
                            <td>
                                <a href="/konten/edit/<?= $k['id'] ?>" class="btn btn-warning">Edit</a>
                                <a href="/konten/delete/<?= $k['id'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>
