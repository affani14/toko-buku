<?= $this->extend('layout/template_baru'); ?>

<?= $this->section('content'); ?>

<div class="contact-container">
    <h1>Hubungi Kami</h1>

    <?php if (isset($alamat) && is_array($alamat)) : ?>
        <div class="alamat-list">
            <?php foreach ($alamat as $a) : ?>
                <div class="alamat-item">
                    <h2><?= esc($a['tipe']); ?></h2>
                    <ul>
                        <li><strong>Alamat:</strong> <?= esc($a['alamat']); ?></li>
                        <li><strong>Kota:</strong> <?= esc($a['kota']); ?></li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <p>Data alamat tidak tersedia.</p>
    <?php endif; ?>
</div>

<?= $this->endSection(); ?>