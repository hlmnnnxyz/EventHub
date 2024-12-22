<?= $this->include('layouts/header') ?>

<h1>Tambah Konser</h1>
<form action="/admin/store_konser" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="judul_konser" class="form-label">Judul Konser</label>
        <input type="text" class="form-control" id="judul_konser" name="judul_konser" required>
    </div>

    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
    </div>

    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
    </div>

    <div class="mb-3">
        <label for="harga" class="form-label">Harga Tiket</label>
        <input type="number" class="form-control" id="harga" name="harga" required>
    </div>

    <div class="mb-3">
        <label for="gambar_konser" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="gambar_konser" name="gambar_konser" required>
    </div>

    <div class="mb-3">
        <label for="artis_konser" class="form-label">Artis yang Tampil</label>
        <?php foreach ($artis as $a): ?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="artis_konser[]" value="<?= $a['id'] ?>" id="artis_<?= $a['id'] ?>">
                <label class="form-check-label" for="artis_<?= $a['id'] ?>"><?= $a['nama_artis'] ?></label>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="mb-3">
        <label for="lokasi_konser" class="form-label">Lokasi</label>
        <select class="form-control" id="lokasi_konser" name="lokasi_konser" required>
            <option value="">Pilih Lokasi</option>
            <?php foreach ($lokasi as $l): ?>
                <option value="<?= $l['id'] ?>"><?= $l['nama_lokasi'] ?> - <?= $l['alamat_lokasi'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/admin/dashboard" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->include('layouts/footer') ?>
