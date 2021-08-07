<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h2>About Me</h2>
            <img src="/img/orang1.jpg" class="image rounded-circle">
            <p class="my-3">Perkenalkan nama saya <?= $profile['nama']; ?>, Umur saya <?= $profile['umur']; ?>, Saya bekerja sebagai <?= $profile['pekerjaan']; ?></p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>