<?= $this->include('layouts/header') ?>
<h1>Edit Lokasi</h1>
<form action="/lokasi/update/<?= $lokasi['id'] ?>" method="post">
    <div class="mb-3">
        <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
        <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" value="<?= $lokasi['nama_lokasi'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="alamat_lokasi" class="form-label">Alamat Lokasi</label>
        <textarea class="form-control" id="alamat_lokasi" name="alamat_lokasi" required><?= $lokasi['alamat_lokasi'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/lokasi" class="btn btn-secondary">Kembali</a>
</form>
<?= $this->include('layouts/footer') ?>
