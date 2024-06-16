<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('isi'); ?>

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">
            <div class="pagetitle">
                <h1>Edit Event</h1>
            </div><!-- End Page Title -->
        </div>

        <!-- Form Edit Event -->
        <div class="col-xxl-12 col-xl-12">
            <div class="card info-card customers-card" style="width: 100%;">
                <div class="card-body">
                    <form action="/pageadmin/event/update/<?= $event['id']; ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Event</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $event['name']; ?>" required>
                        </div>
                        <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description" value="<?= $event['description']; ?>" required></textarea>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="date" name="date" value="<?= $event['date']; ?>"required>
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Lokasi</label>
        <input type="text" class="form-control" id="location" name="location" value="<?= $event['location']; ?>"required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Harga</label>
        <input type="number" class="form-control" id="price" name="price" value="<?= $event['price']; ?>"required>
    </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            <img src="/uploads/<?= $event['image']; ?>" alt="<?= $event['name']; ?>" width="100">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="/pageadmin/event" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div><!-- End Form Edit Event -->
    </section>
</main><!-- End #main -->

<?= $this->endSection(); ?>
