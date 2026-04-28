<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body p-5">
                    <h2 class="card-title text-center mb-4">Daftar Akun</h2>

                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <form action="/auth/register" method="POST">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required 
                                   value="<?= old('username') ?>" minlength="3">
                            <small class="form-text text-muted">Minimal 3 karakter</small>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required 
                                   value="<?= old('email') ?>">
                            <small class="form-text text-muted">Email harus valid dan belum terdaftar</small>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required 
                                   minlength="6">
                            <small class="form-text text-muted">Minimal 6 karakter</small>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirm" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-3">Daftar</button>
                    </form>

                    <hr>

                    <p class="text-center">
                        Sudah punya akun? <a href="/login">Login di sini</a>
                    </p>

                    <p class="text-center">
                        <a href="/">← Kembali ke Homepage</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
