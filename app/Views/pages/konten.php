<?= $this->extend('Layout/template'); ?>

<?= $this->section('isi'); ?>
<section class="konten">
    <div class="container">
        <div class="row">
            <?php foreach ($events as $event): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= base_url('uploads/' . $event['image']); ?>" class="card-img-top" alt="<?= $event['name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $event['name']; ?></h5>
                            <p class="card-text"><?= $event['description']; ?></p>
                            <p class="card-text">Tanggal: <?= date('d F Y', strtotime($event['date'])); ?></p>
                            <p class="card-text">Lokasi: <?= $event['location']; ?></p>
                            <p class="card-text">Harga: Rp <?= number_format($event['price'], 0, ',', '.'); ?></p>
                            <a href=<?= base_url('page/pesan/' . $event['id']); ?> class="btn btn-primary">Beli Tiket</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>