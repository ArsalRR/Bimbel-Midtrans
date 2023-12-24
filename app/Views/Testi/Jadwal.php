<?php $this->extend('Template/User')?>
<?php $this->section('content')?>
<div class="row mt-5">
    <h1 class="text-center mb-5">Jadwal Bimbel Ranking</h1>

    <?php foreach ($tampil as $s): ?>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <img src="<?= base_url('hasil/' . $s['foto_mentor']) ?>" alt="Foto Mentor" style="width: 100px;">
                    <h3><?= $s['nama']; ?></h3>
                    <div class="card-text">
                        <p class="textform1"><strong>Jam Pelajaran:</strong> <?= $s['jampel']; ?></p>
                        <p class="textform1"><strong>Mata Pelajaran:</strong> <?= $s['pelajaran']; ?></p>
                        <p class="textform1"><strong>Materi Yang Diajar:</strong> <?= $s['materi']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php $this->endSection()?>