<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-5">
    <!-- Header -->
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold mb-3">🧪 AddArticle</h1>
        <p class="lead text-muted">Ikuti langkah-langkah di bawah untuk testing fitur CRUD artikel</p>
        <hr class="my-4" style="max-width: 100px; border-width: 3px; margin-left: auto; margin-right: auto;">
    </div>

    <!-- Step 1 -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <div class="card border-left border-primary border-5 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="badge bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem;">
                            1
                        </div>
                        <div class="ms-4 flex-grow-1">
                            <h4 class="fw-bold mb-3">Buka Daftar Artikel Admin</h4>
                            <p class="text-muted mb-3">Klik tombol di bawah untuk membuka halaman daftar artikel admin yang menampilkan semua artikel.</p>
                            <a href="/admin/article/" class="btn btn-primary btn-lg fw-bold">
                                📂 Buka Daftar Artikel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Step 2 -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <div class="card border-left border-success border-5 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="badge bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem;">
                            2
                        </div>
                        <div class="ms-4 flex-grow-1">
                            <h4 class="fw-bold mb-3">Tambah Artikel Baru (CREATE)</h4>
                            <p class="text-muted mb-3">Klik tombol di bawah untuk membuka form tambah artikel baru. Isi judul dan konten, lalu simpan.</p>
                            <a href="/admin/AddArticle" class="btn btn-success btn-lg fw-bold">
                                ✍️ Tambah Artikel Baru
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Step 3 -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <div class="card border-left border-warning border-5 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="badge bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem;">
                            3
                        </div>
                        <div class="ms-4 flex-grow-1">
                            <h4 class="fw-bold mb-3">Edit Artikel (UPDATE)</h4>
                            <p class="text-muted mb-3">Setelah artikel ditambahkan, buka daftar artikel dan klik tombol "Edit" untuk mengubah artikel yang sudah ada.</p>
                            <a href="/admin/article/" class="btn btn-warning btn-lg fw-bold">
                                ✏️ Buka & Edit Artikel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Step 4 -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <div class="card border-left border-danger border-5 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="badge bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem;">
                            4
                        </div>
                        <div class="ms-4 flex-grow-1">
                            <h4 class="fw-bold mb-3">Hapus Artikel (DELETE)</h4>
                            <p class="text-muted mb-3">Dari daftar artikel, klik tombol "Hapus" untuk menghapus artikel. Akan ada konfirmasi sebelum dihapus.</p>
                            <a href="/admin/article/" class="btn btn-danger btn-lg fw-bold">
                                🗑️ Buka & Hapus Artikel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Step 5 -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <div class="card border-left border-info border-5 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="badge bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem;">
                            5
                        </div>
                        <div class="ms-4 flex-grow-1">
                            <h4 class="fw-bold mb-3">Lihat Artikel di Blog Publik (READ)</h4>
                            <p class="text-muted mb-3">Setelah menambah artikel, buka halaman blog publik untuk melihat artikel yang sudah Anda buat dengan numbering yang benar.</p>
                            <a href="/post" class="btn btn-info btn-lg fw-bold text-white">
                                📖 Lihat Blog Publik
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Summary -->
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card bg-light border-0">
                <div class="card-body text-center p-5">
                    <h5 class="fw-bold mb-3">✨ Fitur CRUD Lengkap</h5>
                    <p class="text-muted mb-4">Dengan mengikuti 5 langkah di atas, Anda sudah menguji semua fitur CRUD:</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="p-3 bg-success bg-opacity-10 rounded">
                                <h6 class="fw-bold text-success mb-1">CREATE</h6>
                                <small>Tambah artikel baru</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-info bg-opacity-10 rounded">
                                <h6 class="fw-bold text-info mb-1">READ</h6>
                                <small>Lihat & daftar artikel</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-warning bg-opacity-10 rounded">
                                <h6 class="fw-bold text-warning mb-1">UPDATE</h6>
                                <small>Edit artikel</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-danger bg-opacity-10 rounded">
                                <h6 class="fw-bold text-danger mb-1">DELETE</h6>
                                <small>Hapus artikel</small>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <p class="text-muted small">Semua fitur CRUD sudah berfungsi sempurna dan siap digunakan!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Links -->
    <div class="row mt-5">
        <div class="col-lg-8 mx-auto">
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="/admin/article/" class="btn btn-outline-primary fw-bold">
                    📂 Admin Artikel
                </a>
                <a href="/post" class="btn btn-outline-info fw-bold">
                    📖 Blog Publik
                </a>
                <a href="/dashboard" class="btn btn-outline-secondary fw-bold">
                    🏠 Dashboard
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
