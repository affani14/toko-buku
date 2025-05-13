<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1>Product</h1>
<ul>
    <?php foreach ($product as $product): ?>
        <li>
            <strong><?= esc($product['name']) ?></strong><br>
            <p><?= esc($product['description']) ?></p>
            <p><em>Status: <?= esc($product['status']) ?></em></p>
        </li>
    <?php endforeach; ?>
</ul>
<?= $this->endSection(); ?>