<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Selamat datang di website kami</h1>
                <p class="lead"><?= $nama; ?></p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>