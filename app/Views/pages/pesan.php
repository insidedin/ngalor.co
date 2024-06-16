<?= $this->extend('Layout/template'); ?>

<?= $this->section('isi'); ?>
<section class="pesan">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Pesan Tiket untuk <?= $event['name']; ?></h2>
                <p>Harga Tiket: Rp <?= number_format($event['price'], 0, ',', '.'); ?></p>
                <form action="<?= base_url('page/storePesanan'); ?>" method="post">
                    <?= csrf_field() ?>
                    <input type="hidden" name="event_id" value="<?= $event['id']; ?>">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Jumlah Tiket</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>
                    <p>Total Harga: Rp <span id="totalPrice"></span></p>
                    <button type="submit" class="btn btn-primary">Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('quantity').addEventListener('input', function() {
        var quantity = this.value;
        var price = <?= $event['price']; ?>;
        var totalPrice = quantity * price;
        document.getElementById('totalPrice').textContent = totalPrice.toLocaleString();
    });
</script>

<?= $this->endSection(); ?>
