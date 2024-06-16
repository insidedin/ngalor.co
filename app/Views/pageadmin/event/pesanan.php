<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('isi'); ?>

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">
            <div class="pagetitle">
                <h1>Daftar Pesanan Tiket</h1>
            </div><!-- End Page Title -->
        </div>

        <!-- Tickets Table -->
        <div class="col-xxl-12 col-xl-12">
            <div class="card info-card customers-card" style="width: 100%;">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Event</th>
                                <th>Jumlah Tiket</th>
                                <th>Total Harga</th>
                                <th>Tanggal Pemesanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($tickets as $ticket): ?>
                            <tr>
                                <td><?= $ticket['email']; ?></td>
                                <td><?= $ticket['event_id']; ?></td>
                                <td><?= $ticket['quantity']; ?></td>
                                <td>Rp <?= number_format($ticket['total_price'], 0, ',', '.'); ?></td>
                                <td><?= $ticket['order_date']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- End Tickets Table -->
    </section>
</main><!-- End #main -->

<?= $this->endSection(); ?>
