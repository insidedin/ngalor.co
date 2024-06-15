<?= $this->extend('layoutadmin/templatelogin'); ?>

<?= $this->section('login'); ?>

<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-6 d-flex flex-column align-items-center justify-content-center bg-light">
                                    <img src="/page/assets/img/logoco.png" alt="Logo" class="card-img p-4">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <div class="pt-4 pb-2">
                                            <h5 class="card-title text-center pb-0 fs-4">Selamat Datang di Aplikasi SARAN MI</h5>
                                        </div>

                                        <?php if (session()->getFlashdata('msg')) : ?>
                                            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                        <?php endif; ?>

                                        <form class="row g-3 needs-validation" action="<?= site_url('/login') ?>" method="post" novalidate>
                                            <div class="col-12">
                                                <label for="yourUsername" class="form-label">Username</label>
                                                <input type="text" name="username" class="form-control" id="yourUsername" required>
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>

                                            <div class="col-12">
                                                <label for="yourPassword" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" id="yourPassword" required>
                                                <div class="invalid-feedback">Please enter your password!</div>
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-pink w-100" type="submit">Login</button>
                                            </div>

                                            <div class="col-12 text-center mt-3">
                                                <a href="/home" class="back-to-home">Kembali ke Home</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?= $this->endSection(); ?>
