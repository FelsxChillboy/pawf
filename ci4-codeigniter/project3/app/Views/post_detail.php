<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container my-4">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-8">
            <article class="card mb-4">
                <div class="card-body">
                    <h1 class="h2 mb-3"><?= htmlspecialchars($post['title']) ?></h1>
                    
                    <div class="mb-3">
                        <small class="text-muted">
                            Oleh: <strong><?= htmlspecialchars($post['author']) ?></strong> | 
                            <?= date('d M Y H:i', strtotime($post['created_at'])) ?>
                        </small>
                    </div>

                    <hr>

                    <div class="post-content mb-4">
                        <?= $post['content'] ?>
                    </div>

                    <hr>

                    <!-- Share Section -->
                    <div class="mb-4">
                        <p class="mb-2"><strong>Bagikan:</strong></p>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url() ?>" target="_blank" class="btn btn-sm btn-outline-primary">Facebook</a>
                        <a href="https://twitter.com/intent/tweet?text=<?= htmlspecialchars($post['title']) ?>&url=<?= current_url() ?>" target="_blank" class="btn btn-sm btn-outline-info">Twitter</a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= current_url() ?>" target="_blank" class="btn btn-sm btn-outline-secondary">LinkedIn</a>
                    </div>
                </div>
            </article>

            <!-- Comments Section -->
            <section class="mb-4">
                <h3 class="h5 mb-3">Komentar (<?= count($comments ?? []) ?>)</h3>

                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>

                <!-- Comments List -->
                <div class="mb-4">
                    <?php if (!empty($comments)) : ?>
                        <?php foreach ($comments as $comment) : ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($comment['name']) ?></h6>
                                    <p class="card-text"><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                                    <small class="text-muted"><?= date('d M Y H:i', strtotime($comment['created_at'])) ?></small>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p class="text-muted">Belum ada komentar. Jadilah yang pertama berkomentar!</p>
                    <?php endif; ?>
                </div>

                <!-- Comment Form -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Tinggalkan Komentar</h5>

                        <?php if (session()->getFlashdata('errors')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <ul class="mb-0">
                                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                        <li><?= htmlspecialchars($error) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form action="/comment/store" method="POST">
                            <?= csrf_field() ?>
                            <input type="hidden" name="post_id" value="<?= $post['id'] ?>">

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" required value="<?= old('name') ?>">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required value="<?= old('email') ?>">
                                <small class="text-muted">Email tidak akan dipublikasikan</small>
                            </div>

                            <div class="mb-3">
                                <label for="comment" class="form-label">Komentar</label>
                                <textarea class="form-control" id="comment" name="comment" rows="5" required><?= old('comment') ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <!-- Related Posts -->
            <?php if (!empty($relatedPosts)) : ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Artikel Terkait</h5>
                        <div class="list-group list-group-flush">
                            <?php foreach ($relatedPosts as $related) : ?>
                                <a href="/post/<?= $related['slug'] ?>" class="list-group-item list-group-item-action">
                                    <small><?= htmlspecialchars($related['title']) ?></small>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Back to Posts -->
            <div>
                <a href="/post" class="btn btn-outline-secondary w-100">← Kembali ke Daftar Artikel</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>