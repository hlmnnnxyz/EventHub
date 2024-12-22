<?= $this->include('layouts/header') ?>
<h1>Daftar Lokasi</h1>
<a href="/lokasi/create" class="btn btn-primary mb-3">Tambah Lokasi</a>
<a href="/admin/dashboard" class="btn btn-secondary mb-3">Kembali</a>
<table class="table">
    <thead>
        <tr>
            <th>Nama Lokasi</th>
            <th>Alamat Lokasi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($lokasi as $l): ?>
        <tr>
            <td><?= $l['nama_lokasi'] ?></td>
            <td><?= $l['alamat_lokasi'] ?></td>
            <td>
                <a href="/lokasi/edit/<?= $l['id'] ?>" class="btn btn-warning">Edit</a>
                <form action="/lokasi/delete/<?= $l['id'] ?>" method="post" style="display:inline;">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->include('layouts/footer') ?>
