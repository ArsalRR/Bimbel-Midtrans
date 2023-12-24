<?= $this->extend('Users/index') ?>
<?= $this->section('mentor') ?>
<div class="teacher_container layout_padding2">
<h3 class="text-center mb-4">Testimonial bimbingan</h3>
    <div class="card-deck">
      
        <?php foreach ($tampil as $s): ?>
            <div class="card">
                <div class="card-body">
                <p class="textform1"><strong>Nama Siswa:</strong> <?= $s['nama_siswa']; ?></p>
                        <p class="textform1"><strong>Pesan dan Kesan:</strong> <?= $s['pesan']; ?></p>
                        <p class="textform1"><strong>Pengalaman :</strong> <?= $s['rating']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>


