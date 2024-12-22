<!-- home.php -->
<?= $this->include('layouts/header') ?>
<div class="text-center py-5" style="background: linear-gradient(to right, #556EE6, #8F94FB); color: #FFFFFF;">
    <h1 class="display-4 fw-bold">Selamat Datang di VibeTix</h1>
    <p class="lead">Nikmati kemudahan dalam membeli tiket konser favorit Anda.</p>
    <a href="/artis" class="btn btn-outline-light btn-lg mt-3">Jelajahi Artis</a>
</div>

<div class="container mt-5">
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Event Terbaru</h5>
                    <p class="card-text text-muted">Lihat konser yang sedang trending dan jadilah yang pertama mendapatkan tiket!</p>
                    <a href="/event" class="btn btn-primary">Lihat Event</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title fw-bold">VIP Experience</h5>
                    <p class="card-text text-muted">Nikmati pengalaman tak terlupakan dengan tiket VIP yang eksklusif.</p>
                    <a href="/vip" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Lokasi Konser</h5>
                    <p class="card-text text-muted">Temukan lokasi konser terdekat dengan Anda dan atur perjalanan dengan mudah.</p>
                    <a href="/lokasi" class="btn btn-primary">Temukan Lokasi</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 text-center bg-light mt-5">
    <h2 class="fw-bold">Mengapa Memilih VibeTix?</h2>
    <p class="text-muted">Kami menawarkan kemudahan, kecepatan, dan pengalaman terbaik dalam membeli tiket konser.</p>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <i class="bi bi-music-note-beamed display-5 text-primary"></i>
            <h5 class="mt-3">Ragam Pilihan</h5>
            <p class="text-muted">Dari konser kecil hingga festival besar, semua ada di sini.</p>
        </div>
        <div class="col-md-3">
            <i class="bi bi-shield-check display-5 text-success"></i>
            <h5 class="mt-3">Aman & Terpercaya</h5>
            <p class="text-muted">Sistem pembayaran yang aman dan terpercaya.</p>
        </div>
        <div class="col-md-3">
            <i class="bi bi-clock display-5 text-warning"></i>
            <h5 class="mt-3">Cepat & Mudah</h5>
            <p class="text-muted">Dapatkan tiket dengan beberapa klik saja.</p>
        </div>
    </div>
</div>
<?= $this->include('layouts/footer') ?>
