<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body p-5">
                    <h2 class="card-title text-center mb-4">Login</h2>

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

                    <form action="/auth/login" method="POST">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required 
                                   value="<?= old('email') ?>">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="mb-3">
                            <input type="checkbox" name="remember_me" id="remember_me">
                            <label for="remember_me">Remember Me</label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
                    </form>

                    <hr>

                    <p class="text-center">
                        Belum punya akun? <a href="/register">Daftar sekarang</a>
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
