<h1>Edit Artikel</h1>
<form action="/admin/article/update/<?= $article['id'] ?>" method="post">
    <label for="title">Judul:</label>
    <input type="text" name="title" id="title" value="<?= $article['title'] ?>" required>
    <br>
    <label for="content">Konten:</label>
    <textarea name="content" id="content" required><?= $article['content'] ?></textarea>
    <br>
    <button type="submit">Update</button>
</form>