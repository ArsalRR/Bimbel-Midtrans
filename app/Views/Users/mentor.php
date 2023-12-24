<?= $this->extend('Users/index') ?>
<?= $this->section('mentor') ?>
<div class="teacher_container layout_padding2">
    <div class="card-deck">
        <?php foreach ($mentor as $m): ?>
            <div class="card">
            <?php if ($m['foto_mentor']): ?>
                <img src="<?= base_url('hasil/' . $m['foto_mentor']) ?>" alt="Foto Mentor" style="width: 300px;">
            <?php else: ?>
                Tanpa Foto
            <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"> <b>Nama Mentor : </b><?= $m['nama'] ?></h5>
                    <h5 class="card-content"> <b>Mata Pelajaran : </b><?= $m['pelajaran'] ?></h5>
                    <a href="/Taskcontroll/detail/<?= $m['alias']; ?>" class="btn btn-primary mt-3">Detail Materi</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>


