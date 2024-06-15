<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('isi'); ?>
<main id="main" class="main">
    <section class="section">
        <div class="pagetitle">
            <h1>Manajemen User</h1>
            <a href="/users/create" class="btn btn-primary">Tambah User</a>
        </div><!-- End Page Title -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?= $user['nama'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td><?= $user['role'] ?></td>
                            <td>
                                <a href="/users/edit/<?= $user['id'] ?>" class="btn btn-warning">Edit</a>
                                <a href="/users/delete/<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>
