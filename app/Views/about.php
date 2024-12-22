<?= $this->include('layouts/header') ?>

<section class="about py-5">
    <div class="container">
        <h1 class="fw-bold mb-4 text-center">Tentang Tugas UAS</h1>
        <p class="lead text-center mb-4">Aplikasi manajemen konser dan artis berbasis web untuk tugas UAS.</p>

        <div class="row">
            <div class="col-md-12">
                <h3 class="fw-bold mb-3">Deskripsi Tugas</h3>
                <p>Aplikasi ini bertujuan untuk mengelola konser dan artis dengan berbagai fitur, termasuk menambah, mengedit, dan menghapus data konser serta artis yang akan tampil. Dalam proyek ini, kami menggunakan <strong>CodeIgniter 4</strong> sebagai framework utama untuk membangun aplikasi ini secara efisien dan dengan struktur yang baik.</p>
            </div>

            <div class="col-md-12">
                <h3 class="fw-bold mb-3 mt-4">Fitur Utama Aplikasi</h3>
                <ul class="list-unstyled">
                    <li>CRUD (Create, Read, Update, Delete) untuk konser</li>
                    <li>CRUD untuk artis</li>
                    <li>Manajemen konser termasuk menambahkan gambar dan menentukan artis yang tampil</li>
                    <li>Navigasi yang mudah dengan tombol "Kembali" di setiap halaman</li>
                </ul>
            </div>

            <div class="col-md-12">
                <h3 class="fw-bold mb-3 mt-4">Teknologi yang Digunakan</h3>
                <ul class="list-unstyled">
                    <li><strong>Framework:</strong> CodeIgniter 4</li>
                    <li><strong>Database:</strong> MySQL</li>
                    <li><strong>Frontend:</strong> HTML, CSS, Bootstrap 5</li>
                    <li><strong>Bahasa Pemrograman:</strong> PHP</li>
                </ul>
            </div>

            <div class="col-md-12">
                <h3 class="fw-bold mb-3 mt-4">Pengembang</h3>
                <p>Aplikasi ini dikerjakan oleh:</p>
                <ul class="list-unstyled">
                    <li><strong>JOICE HIELMAN ABBRORI</strong> - NPM: 722520073</li>
                    <li><strong>M. MIFTAKHUL HUDA</strong> - NPM: 722520081</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="text-center py-3">
    <a href="/" class="btn btn-secondary btn-lg">Kembali ke Home</a>
</div>

<?= $this->include('layouts/footer') ?>
