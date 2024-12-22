<?= $this->include('layouts/header') ?>
<h1>Daftar Artis</h1>
<a href="/artis/create" class="btn btn-primary mb-3">Tambah Artis</a>
<a href="/admin/dashboard" class="btn btn-secondary mb-3">Kembali</a>
<table class="table">
    <thead>
        <tr>
            <th>Nama Artis</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($artis as $a): ?>
        <tr>
            <td><?= $a['nama_artis'] ?></td>
            <td><?= $a['deskripsi_artis'] ?></td>
            <td>
                <a href="/artis/edit/<?= $a['id'] ?>" class="btn btn-warning">Edit</a>
                <form action="/artis/delete/<?= $a['id'] ?>" method="post" style="display:inline;">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->include('layouts/footer') ?>
