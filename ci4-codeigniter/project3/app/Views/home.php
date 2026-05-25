<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<!-- HERO SECTION -->
<section class="hero-section bg-primary text-white py-5"
    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-3">Selamat Datang di MyBlog</h1>
                <p class="lead mb-4">
                    Platform Blog untuk Berbagi Ilmu PHP, Web Development, dan Database
                </p>
                <div class="d-flex gap-2 justify-content-center">
                    <a href="/post" class="btn btn-light btn-lg fw-bold">📖 Baca Artikel</a>
                    <?php if (!session()->get('logged_in')): ?>
                        <a href="/register" class="btn btn-outline-light btn-lg fw-bold">✍️ Daftar Sekarang</a>
                    <?php else: ?>
                        <a href="/dashboard" class="btn btn-outline-light btn-lg fw-bold">🏠 Dashboard</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container my-5">
    <!-- FEATURED POSTS -->
<section class="mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 mb-0">📚 Artikel Terbaru</h2>
        <?php if (session()->get('logged_in') && session()->get('role') === 'admin'): ?>
            <a href="/admin/post/new" class="btn btn-success fw-bold">
                ✏️ Tambah Artikel
            </a>
        <?php endif; ?>
    </div>

    <div class="row">
        <?php if (!empty($featuredPosts)): ?>
            <?php foreach ($featuredPosts as $post): ?>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/post/<?= $post['slug'] ?>" class="text-decoration-none">
                                    <?= htmlspecialchars($post['title']) ?>
                                </a>
                            </h5>
                            <p class="card-text text-muted">
                                <?= substr($post['content'], 0, 80) ?>...
                            </p>
                            <small class="text-muted d-block mb-2">
                                <?= date('d M Y', strtotime($post['created_at'])) ?>
                            </small>
                            <div class="d-flex gap-2 flex-wrap">
                                <a href="/post/<?= $post['slug'] ?>" class="btn btn-sm btn-outline-primary">
                                    Baca →
                                </a>
                                <?php if (session()->get('logged_in') && session()->get('role') === 'admin'): ?>
                                    <a href="/admin/post/<?= $post['id'] ?>/edit" class="btn btn-sm btn-warning">
                                        ✏️ Edit
                                    </a>
                                    <a href="/admin/post/<?= $post['id'] ?>/delete" 
                                       class="btn btn-sm btn-danger"
                                       onclick="return confirm('Yakin hapus artikel ini?')">
                                        🗑️ Hapus
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <p class="text-muted text-center">Belum ada artikel yang diterbitkan.</p>
            </div>
        <?php endif; ?>
    </div>

    <div class="text-center mt-4">
        <a href="/post" class="btn btn-primary btn-lg">Lihat Semua Artikel (<?= $totalPosts ?> artikel) →</a>
    </div>
</section>

    <hr class="my-5">

    <!-- CATEGORIES -->
    <section class="mb-5">
        <h2 class="h3 mb-4">📂 Kategori</h2>
        <div class="row">
            <?php if (!empty($categories)): ?>
                <?php foreach ($categories as $category): ?>
                    <div class="col-md-3 mb-3">
                        <a href="/post?category=<?= $category['id'] ?>" class="card h-100 text-decoration-none category-card">
                            <div class="card-body text-center">
                                <h5 class="card-title">
                                    <?php
                                    // Icon based on category
                                    $icons = [
                                        'Technology' => '💻',
                                        'Web Development' => '🌐',
                                        'Database' => '🗄️',
                                        'Design' => '🎨'
                                    ];
                                    echo isset($icons[$category['name']]) ? $icons[$category['name']] : '📌';
                                    ?>
                                    <br>
                                    <?= htmlspecialchars($category['name']) ?>
                                </h5>
                                <p class="card-text small text-muted">
                                    <?= htmlspecialchars(substr($category['description'], 0, 50)) ?>...
                                </p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

    <hr class="my-5">

    <!-- Flash Message -->
    <!-- NEWSLETTER SIGNUP -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <!-- NEWSLETTER SIGNUP -->
    <section class="newsletter-section bg-light p-5 rounded"></section>
    <section class="newsletter-section bg-light p-5 rounded">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h2 class="h3 mb-3">📧 Subscribe Newsletter</h2>
                <p class="mb-4 text-muted">
                    Dapatkan update artikel terbaru langsung ke email Anda setiap minggu
                </p>
                <form method="POST" action="/newsletter/subscribe" class="d-flex gap-2">
                    <?= csrf_field() ?>
                    <input type="email" name="email" class="form-control form-control-lg"
                        placeholder="Masukkan email Anda..." required>
                    <button type="submit" class="btn btn-primary btn-lg fw-bold">Subscribe</button>
                </form>
                <small class="text-muted d-block mt-2">Kami tidak akan spam email Anda ✉️</small>
            </div>
        </div>
    </section>
</div>

<style>
    .hero-section {
        margin-top: -30px;
        margin-bottom: 40px;
    }

    .category-card {
        transition: transform 0.3s, box-shadow 0.3s;
        border: none;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        color: #667eea;
    }

    .category-card h5 {
        font-size: 1.5rem;
    }
</style>

<?= $this->endSection() ?>