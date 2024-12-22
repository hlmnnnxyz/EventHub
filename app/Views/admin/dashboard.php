<?= $this->include('layouts/header') ?>

<div class="container mt-4">
    <h1 class="h3">Dashboard Admin</h1>
    <p class="mb-4">Kelola konser dan artis di sini. Pilih aksi untuk menambah atau mengelola data.</p>
    
    <!-- Action Buttons -->
    <div class="mb-4">
        <a href="/admin/create_konser" class="btn btn-primary shadow-sm">Tambah Konser</a>
        <a href="/artis" class="btn btn-secondary shadow-sm">Daftar Artis</a>
        <a href="/lokasi" class="btn btn-success shadow-sm">Daftar Lokasi</a>
    </div>

    <!-- Konser Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm">
            <thead class="table-light">
                <tr>
                    <th style="width: 180px;">Judul Konser</th>
                    <th style="width: 160px;">Deskripsi</th>
                    <th style="width: 100px;">Tanggal</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Artis</th>
                    <th>Lokasi</th>
                    <th style="width: 120px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($konser as $k): ?>
                <tr>
                    <td><?= $k['judul_konser'] ?></td>
                    <td><?= $k['deskripsi'] ?></td>
                    <td><?= $k['tanggal'] ?></td>
                    <td>Rp <?= number_format($k['harga'], 0, ',', '.') ?></td>
                    <td><img src="/uploads/<?= $k['gambar_konser'] ?>" alt="<?= $k['judul_konser'] ?>" class="img-fluid rounded" width="100"></td>
                    <td>
                        <?php 
                        $artis_konser = explode(',', $k['artis_konser']);
                        $artis_names = array_map(function($artis_id) use ($artis) {
                            foreach($artis as $a) {
                                if($a['id'] == $artis_id) {
                                    return $a['nama_artis'];
                                }
                            }
                        }, $artis_konser);
                        echo implode(', ', $artis_names);
                        ?>
                    </td>
                    <td>
                        <?php 
                        if (isset($k['lokasi_konser'])) {
                            foreach($lokasi as $l) {
                                if($l['id'] == $k['lokasi_konser']) {
                                    echo $l['nama_lokasi'] . ' - ' . $l['alamat_lokasi'];
                                    break;
                                }
                            }
                        } else {
                            echo 'Lokasi tidak tersedia';
                        }
                        ?>
                    </td>
                    <td class="text-center">
                        <!-- Edit Icon -->
                        <a href="/admin/edit_konser/<?= $k['id'] ?>" class="text-warning me-3" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <!-- Delete Icon -->
                        <form action="/admin/delete_konser/<?= $k['id'] ?>" method="post" style="display:inline;">
                            <button type="submit" class="btn btn-link text-danger p-0" title="Hapus" onclick="return confirm('Apakah Anda yakin?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->include('layouts/footer') ?>
