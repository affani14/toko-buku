<?= $this->extend('layout/template_baru'); ?>

<?= $this->section('content'); ?>

<div class="portfolio-container">
    <h1>My Portofolio</h1>
    <p>Beberapa proyek yang pernah saya kerjakan:</p>

    <div class="portfolio-items">
        <div class="item">
            <h3>Website Profil Sekolah</h3>
            <p>Menggunakan CodeIgniter 4 dan Bootstrap. Menyediakan informasi sekolah, berita, dan galeri.</p>
        </div>

        <div class="item">
            <h3>Aplikasi Kasir Sederhana</h3>
            <p>Dibuat dengan PHP dan MySQL. Fitur: login, transaksi, laporan, dan stok barang.</p>
        </div>

        <div class="item">
            <h3>Landing Page Produk</h3>
            <p>Responsive landing page HTML/CSS untuk promosi produk digital, fokus pada konversi.</p>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>