<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('isi'); ?>

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">
            <div class="pagetitle">
                <h1>Edit Profile</h1>
            </div><!-- End Page Title -->
        </div>

        <div class="col-xxl-12 col-xl-12">
            <div class="card info-card customers-card" style="width: 100%;">
                <div class="card-body">
                    <form action="/pageadmin/users/update/<?= $user['id'] ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?= $user['username'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?= $user['email'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            <small>Biarkan kosong jika tidak ingin mengubah password.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div><!-- End Users Card -->
    </section>
</main><!-- End #main -->

<?= $this->endSection(); ?>
