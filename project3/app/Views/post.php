<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-4">
    <!-- Search Form & Categories -->
    <div class="row mb-4">
        <div class="col-md-8 mx-auto">
            <!-- Search Form -->
            <form method="GET" action="/post" class="d-flex gap-2 mb-3">
                <input type="text" name="q" class="form-control" placeholder="Cari artikel..." value="<?= htmlspecialchars($keyword ?? '') ?>">
                <button type="submit" class="btn btn-primary">Cari</button>
                <?php if (!empty($keyword)) : ?>
                    <a href="/post" class="btn btn-secondary">Reset</a>
                <?php endif; ?>
            </form>

            <!-- Categories Filter -->
            <?php if (!empty($categories)) : ?>
                <div class="mb-3">
                    <label class="form-label"><strong>Filter Kategori:</strong></label>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="/post" class="btn btn-outline-secondary btn-sm <?= empty($categoryId) ? 'active' : '' ?>">Semua</a>
                        <?php foreach ($categories as $cat) : ?>
                            <a href="/post?category=<?= $cat['id'] ?>" class="btn btn-outline-secondary btn-sm <?= $categoryId == $cat['id'] ? 'active' : '' ?>">
                                <?= htmlspecialchars($cat['name']) ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Search Results Info -->
    <?php if (!empty($keyword)) : ?>
        <div class="row mb-3">
            <div class="col-md-8 mx-auto">
                <p class="text-muted">Hasil pencarian untuk: <strong><?= htmlspecialchars($keyword) ?></strong> (<?= count($posts) ?> artikel ditemukan)</p>
            </div>
        </div>
    <?php endif; ?>

    <!-- Posts List -->
    <div class="row">
        <?php if (empty($posts)) : ?>
            <div class="col-md-8 mx-auto">
                <div class="alert alert-info" role="alert">
                    <?= !empty($keyword) ? 'Tidak ada artikel yang sesuai dengan pencarian Anda.' : 'Tidak ada artikel yang diterbitkan.' ?>
                </div>
            </div>
        <?php else : ?>
            <?php foreach ($posts as $post) : ?>
                <div class="col-md-12 my-2 card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="h5"><a href="/post/<?= $post['slug'] ?>"><?= $post['title'] ?></a></h5>
                                <p><?= substr($post['content'], 0, 120) ?>...</p>
                                <small class="text-muted">Oleh: <?= $post['author'] ?> | <?= date('d M Y', strtotime($post['created_at'])) ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <?php if ($pager) : ?>
        <div class="row mt-4">
            <div class="col-md-8 mx-auto">
                <nav aria-label="Page navigation">
                    <?= $pager->links() ?>
                </nav>
            </div>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>