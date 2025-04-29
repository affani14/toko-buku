<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1>Projects</h1>
<ul>
    <?php foreach ($projects as $project): ?>
        <li>
            <strong><?= esc($project['name']) ?></strong><br>
            <p><?= esc($project['description']) ?></p>
            <p><em>Status: <?= esc($project['status']) ?></em></p>
        </li>
    <?php endforeach; ?>
</ul>
<?= $this->endSection(); ?>