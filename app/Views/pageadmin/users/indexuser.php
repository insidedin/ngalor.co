<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('isi'); ?>

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">
            <div class="pagetitle">
                <h1>Profile Admin</h1>
            </div><!-- End Page Title -->
        </div>

        <!-- Profile Card -->
        <div class="col-xxl-12 col-xl-12">
            <div class="card info-card customers-card" style="width: 100%;">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user['username']; ?></td>
                                <td><?= $user['email']; ?></td>
                                <td>
                                    <!-- Aksi seperti Edit dan Delete bisa dihapus karena ini halaman profile -->
                                    <a href="/pageadmin/users/edit/<?= $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <!-- <a href="/pageadmin/users/delete/<?= $user['id']; ?>" class="btn btn-danger btn-sm">Delete</a> -->
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- End Profile Card -->
    </section>
</main><!-- End #main -->

<?= $this->endSection(); ?>
