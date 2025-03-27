<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1>Hubungi Kami</h1>
<?php if (isset($alamat) && is_array($alamat)) : ?>
    <?php foreach ($alamat as $a) : ?>
        <ul>
            <li><?= esc($a['tipe']); ?></li>
            <li><?= esc($a['alamat']); ?></li>
            <li><?= esc($a['kota']); ?></li>
        </ul>
    <?php endforeach; ?>
<?php else : ?>
    <p>Data alamat tidak tersedia.</p>
<?php endif; ?>
<?= $this->endSection(); ?>