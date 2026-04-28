<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4">Selamat Datang, <?= htmlspecialchars($username) ?>!</h2>

                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">Username</h5>
                                    <p class="card-text"><?= htmlspecialchars($username) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text"><?= htmlspecialchars($email) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="mb-3">Menu</h4>
                    <div class="list-group">
                        <a href="/post" class="list-group-item list-group-item-action">
                            📖 Baca Artikel
                        </a>
                        <a href="/dashboard" class="list-group-item list-group-item-action active">
                            🏠 Dashboard
                        </a>
                        <a href="/auth/logout" class="list-group-item list-group-item-action text-danger">
                            🚪 Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Info</h5>
                    <p class="card-text">
                        Anda sudah login ke MyBlog! Selamat menikmati semua fitur yang tersedia.
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Jika ingin logout, silakan klik tombol logout di menu.</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
