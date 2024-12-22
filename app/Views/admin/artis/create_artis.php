<?= $this->include('layouts/header') ?>
<h1>Tambah Artis</h1>
<form action="/artis/store" method="post">
    <div class="mb-3">
        <label for="nama_artis" class="form-label">Nama Artis</label>
        <input type="text" class="form-control" id="nama_artis" name="nama_artis" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi_artis" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi_artis" name="deskripsi_artis" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/artis" class="btn btn-secondary">Kembali</a>
</form>
<?= $this->include('layouts/footer') ?>
