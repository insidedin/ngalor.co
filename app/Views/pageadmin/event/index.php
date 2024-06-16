<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('isi'); ?>

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">
            <div class="pagetitle">
                <h1>Manajemen Event</h1>
            </div><!-- End Page Title -->
        </div>

        <!-- Event Card -->
        <div class="col-xxl-12 col-xl-12">
            <div class="card info-card customers-card" style="width: 100%;">
                <div class="card-body">
                    <a href="/pageadmin/event/create" class="btn btn-primary">Tambah Event</a>
                    <br><br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Event</th>
                                <th>Tanggal</th>
                                <th>Lokasi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($events as $event): ?>
                            <tr>
                                <td><?= $event['name']; ?></td>
                                <td><?= $event['date']; ?></td>
                                <td><?= $event['location']; ?></td>
                                <td><img src="/uploads/<?= $event['image']; ?>" alt="<?= $event['name']; ?>" width="100"></td>
                                <td>
                                    <a href="/pageadmin/event/edit/<?= $event['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/pageadmin/event/delete/<?= $event['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- End Event Card -->
    </section>
</main><!-- End #main -->

<?= $this->endSection(); ?>
