<h1>Daftar Artikel</h1>
<a href="/admin/article/create">Tambah Artikel</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $article['id'] ?></td>
                <td><?= $article['title'] ?></td>
                <td>
                    <a href="/admin/article/edit/<?= $article['id'] ?>">Edit</a>
                    <a href="/admin/article/delete/<?= $article['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>