<h1>Tambah Artikel</h1>
<form action="/admin/article/store" method="post">
    <label for="title">Judul:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="content">Konten:</label>
    <textarea name="content" id="content" required></textarea>
    <br>
    <button type="submit">Simpan</button>
</form>